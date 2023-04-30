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
   <body class="product">

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
      
      <div class="px-96">
         <h1 class="register_heading lg:text-7xl md:text-5xl sm:text-3xl text-3xl">Register</h1>
         <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="upload.php" enctype="multipart/form-data">
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
               <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name"><br><br>
            </div>
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2">Age</label>
               <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="age">
            </div>
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
               <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                     <div class="flex items-center pl-3">
                        <input id="horizontal-list-radio-license" type="radio" name="gender" value="male" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-license" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                     </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                     <div class="flex items-center pl-3">
                        <input id="horizontal-list-radio-id" input type="radio" name="gender" value="female" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-id" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                     </div>
                  </li>
               </ul>
            </div>
            <br>      
            <label class="block text-gray-700 text-sm font-bold mb-2" for="file-upload">Upload 3 Photos (.png)</label>
            <input class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="file-upload" name="file-upload[]" />
            <input class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="file-upload" name="file-upload[]" />
            <input class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" id="file-upload" name="file-upload[]" />
            <br>
            <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit" value="Upload">
            Upload
            </button>
         </form>
      </div>

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