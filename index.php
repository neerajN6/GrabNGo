<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>GrabNGo</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Black+Ops+One&family=Montserrat:wght@100;400;700;900&family=Source+Sans+Pro&family=Ubuntu:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <!-- NavBar -->
      <section id="navbar">
         <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center px-20">
               <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
               <img src="https://cdn.discordapp.com/attachments/1079319188524503041/1100711471387791400/Screenshot_2023-04-26_095853-removebg-preview.png" alt="logo" class="w-18 h-12 text-white">
               <span class="ml-3 text-xl logo_text">GrabNGo</span>
               </a>
               <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center header_links">
                  <a href="register.php" class="mr-5 hover:text-gray-900">Register</a>
                  <a href="#testimonials" class="mr-5 hover:text-gray-900">Testimonials</a>
                  <a href="#photo" class="mr-5 hover:text-gray-900">Photo Gallary</a>
                  <a href="#features" class="mr-5 hover:text-gray-900">Features</a>
                  <a href="#team" class="mr-5 hover:text-gray-900">Our Team</a>
               </nav>
            </div>
         </header>
      </section>
      
      <!-- Header -->
      <section class="text-gray-600 body-font" id="header">
         <div class="container mx-auto flex px-20 py-9 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
               <h1 class="title-font lg:text-7xl md:text-5xl sm:text-3xl text-3xl header_text">
                  Welcome to
                  <br class="hidden lg:inline-block">GrabNGo
                  <!-- lg:text-7xl md:text-5xl sm:text-3xl text-3xl mb-4 font-medium text-gray-900 -->
               </h1>
               <p class="mb-8 leading-relaxed header_sub_text text-xl text-justify">Welcome to our innovative retail store! Our aim is to provide a cashier-less shopping experience through the use of facial recognition technology and easy payment methods.</p>
               <div class="flex justify-center">
                  <button onclick="window.location.href='customer.php'" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Customer Info</button>
                  <button onclick="window.location.href='product.php'" href="product.php" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Product Info</button>
               </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
               <!-- <img class="object-cover object-center rounded" alt="hero" src="http://source.unsplash.com/720x600/?grocery,shops"> -->
               <img class="object-cover object-center rounded" src="http://source.unsplash.com/720x600/?grocery,shops" id="myImage">
               <script>
               setInterval(function() {
                  document.getElementById('myImage').src = 'http://source.unsplash.com/720x600/?grocery,shops&_=' + new Date().getTime();
               }, 5000);
               </script>
            </div>
         </div>
      </section>

      <hr class="w-48 h-1 mx-auto my-0 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

      <!-- Testimonials -->
      <section class="text-gray-600 body-font" id="testimonials">
         <div class="container px-20 py-9 mx-auto">
            <h1 class="text-5xl font-medium title-font text-gray-900 mb-12 text-center index_headers">TESTIMONIALS</h1>
            <div class="flex flex-wrap -m-4">
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-gray-200 p-8 rounded">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                     </svg>
                     <p class="leading-relaxed mb-6 text-justify">I was blown away by the convenience of this store! Being able to walk in, grab what I needed, and leave without any hassle was amazing. The facial recognition technology was seamless and the mobile app payment system made checkout a breeze. I can't imagine going back to a traditional store now that I've experienced this innovative shopping experience.</p>
                     <a class="inline-flex items-center">
                     <img alt="testimonial" src="http://source.unsplash.com/106x106/?man,boy" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                     <span class="flex-grow flex flex-col pl-4">
                     <span class="title-font font-medium text-gray-900">John Caulfield</span>
                     <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                     </span>
                     </a>
                  </div>
               </div>
               <div class="p-4 md:w-1/2 w-full">
                  <div class="h-full bg-gray-200 p-8 rounded">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                     </svg>
                     <p class="leading-relaxed mb-6 text-justify">As someone who is always on the go, I appreciate the time-saving benefits of this cashier-less store. I no longer have to spend extra time waiting in long lines or dealing with slow cashiers. The facial recognition technology was surprisingly accurate and made the shopping experience even faster. I highly recommend this store to anyone who wants to save time and simplify their shopping experience.</p>
                     <a class="inline-flex items-center">
                     <img alt="testimonial" src="http://source.unsplash.com/107x107/?woman,girl" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                     <span class="flex-grow flex flex-col pl-4">
                     <span class="title-font font-medium text-gray-900">Sarah Kamu</span>
                     <span class="text-gray-500 text-sm">DESIGNER</span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <hr class="w-48 h-1 mx-auto my-0 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

      <!-- Photo Gallary -->
      <section class="text-gray-600 body-font" id="photo">
         <div class="container px-20 py-9 mx-auto flex flex-wrap">
            <div class="flex w-full mb-10 flex-wrap">
               <h1 class="lg:text-5xl sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/2 lg:mb-0 mb-4 index_headers">PHOTO GALLARY</h1>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
               <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-1/2">
                     <img alt="gallery" class="w-full object-cover h-full object-center block" src="http://source.unsplash.com/500x300/?grocery,shops">
                  </div>
                  <div class="md:p-2 p-1 w-1/2">
                     <img alt="gallery" class="w-full object-cover h-full object-center block" src="http://source.unsplash.com/501x301/?grocery,shops">
                  </div>
                  <div class="md:p-2 p-1 w-full">
                     <img alt="gallery" class="w-full h-full object-cover object-center block" src="http://source.unsplash.com/600x360/?grocery,shops">
                  </div>
               </div>
               <div class="flex flex-wrap w-1/2">
                  <div class="md:p-2 p-1 w-full">
                     <img alt="gallery" class="w-full h-full object-cover object-center block" src="http://source.unsplash.com/601x361/?grocery,shops">
                  </div>
                  <div class="md:p-2 p-1 w-1/2">
                     <img alt="gallery" class="w-full object-cover h-full object-center block" src="http://source.unsplash.com/502x302/?grocery,shops">
                  </div>
                  <div class="md:p-2 p-1 w-1/2">
                     <img alt="gallery" class="w-full object-cover h-full object-center block" src="http://source.unsplash.com/503x303/?grocery,shops">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <hr class="w-48 h-1 mx-auto my-0 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

      <!-- Features -->
      <section class="text-gray-600 body-font" id="features">
         <div class="container px-5 py-9 mx-auto">
         <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
               <img src="https://cdn.discordapp.com/attachments/1079319188524503041/1100699562592698378/face-id_2.png" alt="face_id" class="sm:w-16 sm:h-16 w-10 h-10">
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
               <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Facial Recognition</h2>
               <p class="leading-relaxed text-base text-justify">Facial recognition is a technology that uses algorithms to identify and authenticate individuals based on their unique facial features, which can include things like the distance between their eyes, the shape of their nose, and the contours of their jawline.</p>
               <a href="face_recognition.php" class="mt-3 text-indigo-500 inline-flex items-center">
                  Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                     <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
               </a>
            </div>
         </div>
         <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
               <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Product Details</h2>
               <p class="leading-relaxed text-base text-justify">Keeping track of all the products in the store is a crucial aspect of maintaining inventory and ensuring that customers can quickly find what they're looking for. This can be achieved through the use of various technologies such as RFID tags which helps us monitor stock levels, track sales data, and optimize their supply chain.</p>
               <a href="product.php" class="mt-3 text-indigo-500 inline-flex items-center">
                  Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                     <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
               </a>
            </div>
            <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
               <img src="https://cdn.discordapp.com/attachments/1079319188524503041/1100705696531632158/product.png" alt="product_details" class="sm:w-16 sm:h-16 w-10 h-10">
            </div>
         </div>
         <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
         <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <img src="https://cdn.discordapp.com/attachments/1079319188524503041/1100708603016511589/user.png" alt="customer_details" class="sm:w-16 sm:h-16 w-10 h-10">
         </div>
         <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Customer Details</h2>
            <p class="leading-relaxed text-base text-justify">The ability to view the details of every customer in the store can be achieved through the use of various technologies such as CCTV cameras and facial recognition systems. This can provide valuable insights for businesses, allowing us to understand our customers better and improve the overall shopping experience.</p>
            <a href="customer.php" class="mt-3 text-indigo-500 inline-flex items-center">
               Learn More
               <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
               </svg>
            </a>
         </div>
      </section>

      <hr class="w-48 h-1 mx-auto my-0 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

      <!-- Team Details -->
      <section class="text-gray-600 body-font" id="team">
         <div class="container px-60 py-5 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
               <h1 class="sm:text-5xl text-2xl font-medium title-font mb-4 text-gray-900 index_headers">OUR TEAM</h1>
               <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-justify">The team is comprised of skilled developers who possess expertise in their respective areas of work. With our skills and knowledge, we deliver high-quality software solutions that meet the client's requirements. The team's expertise ensures that the project is completed within the set timelines and meets the desired quality standards.</p>
            </div>
            <div class="flex flex-wrap -m-2">
               <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://cdn.discordapp.com/attachments/1079319188524503041/1100954164495929405/10.png">
                     <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Neeraj Nemiraj</h2>
                        <p class="text-gray-500">Web Developer</p>
                     </div>
                  </div>
               </div>
               <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://cdn.discordapp.com/attachments/1079319188524503041/1100952805986009128/2.png">
                     <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Pratham P Shetty</h2>
                        <p class="text-gray-500">IOT Developer</p>
                     </div>
                  </div>
               </div>
               <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://cdn.discordapp.com/attachments/1079319188524503041/1094522130693111818/1.png">
                     <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Nelson D Cunha</h2>
                        <p class="text-gray-500">App Developer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <hr class="w-48 h-1 mx-auto my-0 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

      <!-- Footer -->
      <footer class="text-gray-600 body-font" id="footer">
         <div class="container px-20 py-9 mx-auto flex items-center sm:flex-row flex-col">
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