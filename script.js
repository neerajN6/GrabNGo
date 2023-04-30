const video = document.getElementById("video");
let lastRecognizedLabel = "";
let recognitionCount = 0;
let videoStream = null;

Promise.all([
   faceapi.nets.ssdMobilenetv1.loadFromUri('http://localhost/GrabNGo/models/'),
   faceapi.nets.faceRecognitionNet.loadFromUri('http://localhost/GrabNGo/models/'),
   faceapi.nets.faceLandmark68Net.loadFromUri('http://localhost/GrabNGo/models/')
]);

function start() {
   startWebcam();
   faceRecognition();
}

function startWebcam() {
   document.getElementById("video").style.display = "block";
   navigator.mediaDevices
      .getUserMedia({
         video: true,
         audio: false,
      })
      .then((stream) => {
         video.srcObject = stream;
         videoStream = stream;
      })
      .catch((error) => {
         console.error(error);
      });
}

function stop() {
   if (videoStream) {
      const tracks = videoStream.getTracks();
      tracks.forEach((track) => {
         track.stop();
      });
      videoStream = null;
   }
   video.pause();
   video.src = "";
   canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);
}

function getLabeledFaceDescriptions() {
   const labels = ["Neeraj", "Pratham", "Nelson"];
   return Promise.all(
      labels.map(async (label) => {
         const descriptions = [];
         for (let i = 1; i <= 3; i++) {
            const img = await faceapi.fetchImage(`./labels/${label}/${i}.png`);
            const detections = await faceapi
               .detectSingleFace(img)
               .withFaceLandmarks()
               .withFaceDescriptor();
            descriptions.push(detections.descriptor);
         }
         return new faceapi.LabeledFaceDescriptors(label, descriptions);
      })
   );
}

async function faceRecognition() {
   const labeledFaceDescriptors = await getLabeledFaceDescriptions();
   const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors);

   video.addEventListener("playing", () => {
      location.reload();
   });

   const canvas = faceapi.createCanvasFromMedia(video);
   document.body.append(canvas);

   const displaySize = {
      width: video.width,
      height: video.height
   };
   faceapi.matchDimensions(canvas, displaySize);

   setInterval(async () => {
      const detections = await faceapi
         .detectAllFaces(video)
         .withFaceLandmarks()
         .withFaceDescriptors();

      const resizedDetections = faceapi.resizeResults(detections, displaySize);

      canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);

      const results = resizedDetections.map((d) => {
         return faceMatcher.findBestMatch(d.descriptor);
      });
      results.forEach(async (result, i) => {
         const box = resizedDetections[i].detection.box;
         const drawBox = new faceapi.draw.DrawBox({
            x: box.x,
            y: box.y + 120, // add 50 pixels to move the box down
            width: box.width,
            height: box.height
         }, {
            label: result
         });

         if (result.label !== "unknown" && result.label !== lastRecognizedLabel) {
            //&& result.label !== lastRecognizedLabel
            const welcomeMessage = `Hello ${result.label}!`;
            const speech = new SpeechSynthesisUtterance(welcomeMessage);
            window.speechSynthesis.speak(speech);
            lastRecognizedLabel = result.label;
            alert(welcomeMessage);

            // Send the label value to the PHP endpoint
            const formData = new FormData();
            formData.append('label', result.label);
            const response = await fetch('database.php', {
               method: 'POST',
               body: formData
            });
            const json = await response.json();
            console.log(json.message);
         }
      });
   }, 100);

}