<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>GrabNGo</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Black+Ops+One&family=Montserrat:wght@100;400;700;900&family=Source+Sans+Pro&family=Ubuntu:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
      <script defer src= "face-api.min.js"></script>
      <script defer src="script.js"></script>
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="stylesheet" href="style.css">
   </head>
   <body style="background-color: #F1F6F9" onload="startWebcam();">

      <!-- Header -->
      <section id="navbar">
         <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center px-48">
               <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
               <img src="https://cdn.discordapp.com/attachments/1079319188524503041/1100711471387791400/Screenshot_2023-04-26_095853-removebg-preview.png" alt="logo" class="w-18 h-12 text-white">
               <span class="ml-3 text-xl logo_text">GrabNGo</span>
               </a>
               <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center header_links">
                  <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
               </nav>
            </div>
         </header>
      </section>

      <!-- Face Recognition -->
      <section class="text-gray-600 body-font">
         <div class="container mx-auto flex px-48 py-0 pb-20 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
               <video id="video" width="600" height="450" autoplay></video>
               <br><br>
               <div class="button-box">
                  <button type="button" id="startButton" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="faceRecognition()">Start Recognition</button>
                  <button type="button" id="stopButton" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" onclick="stop()">Stop Video</button>
               </div>
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
               <h1 class="title-font lg:text-7xl md:text-5xl sm:text-3xl text-3xl mb-4 font-medium text-gray-900 header_text">
                  Face Recognition
                  <!-- lg:text-7xl md:text-5xl sm:text-3xl text-3xl -->
               </h1>
               <p class="mb-8 leading-relaxed">Facial recognition is a technology that uses algorithms to identify and authenticate individuals based on their unique facial features, which can include things like the distance between their eyes, the shape of their nose, and the contours of their jawline.</p>
            </div>
         </div>
         </div>
      </section>

      <!-- Footer -->
      <footer class="text-gray-600 body-font" id="footer">
         <div class="container px-48 py-9 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="https://cdn.discordapp.com/attachments/1079319188524503041/1100711471387791400/Screenshot_2023-04-26_095853-removebg-preview.png" alt="logo" class="w-18 h-12 text-white">
            <span class="ml-3 text-xl logo_text">GrabNGo</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2023 GrabNGo —
               <a href="" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@grabngo</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
               <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
               </a>
               <a class="ml-3 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
               </a>
               <a class="ml-3 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                     <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
               </a>
               <a class="ml-3 text-gray-500">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                     <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                     <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
               </a>
            </span>
         </div>
      </footer>
   </body>
</html>