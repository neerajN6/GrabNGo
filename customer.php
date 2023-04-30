<?php
require_once __DIR__ . '/vendor/autoload.php';

$connectionString = "mongodb+srv://admin-neeraj:kateelamma@cluster0.nrbkqml.mongodb.net/?retryWrites=true&w=majority";

$client = new MongoDB\Client($connectionString);

// Create the GrabNGo database and the Products and Customers collections
$grabNGoDB = $client->grabNGo;
$productsColl = $grabNGoDB->Products;
$customersColl = $grabNGoDB->Customers;

// Get the customers whose Cart number is not null
$customersCursor = $customersColl->find(['Cart number' => ['$ne' => null]]);

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
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
      
      <div class="flex flex-col px-48">
         <h1 class="product_heading lg:text-7xl md:text-5xl sm:text-3xl text-3xl">Customer Details</h1>
         <!-- lg:text-7xl md:text-5xl sm:text-3xl text-3xl mb-4 font-medium text-gray-900 -->
         <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
               <div class="overflow-hidden">
                  <table
                     class="min-w-full border-neutral-100 text-center text-sm font-light">
                     <thead class="border-b font-medium bg-indigo-400">
                        <tr>
                           <th
                              scope="col"
                              class="border-r px-6 py-4 border-neutral-100">
                              Name
                           </th>
                           <th
                              scope="col"
                              class="border-r px-6 py-4 border-neutral-100">
                              Age
                           </th>
                           <th
                              scope="col"
                              class="border-r px-6 py-4 border-neutral-100">
                              Gender
                           </th>
                           <th
                              scope="col"
                              class="border-r px-6 py-4 border-neutral-100">
                              Cart Number
                           </th>
                           <th
                              scope="col"
                              class="border-r px-6 py-4 border-neutral-100">
                              Actions
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($customersCursor as $customer) { ?>
                        <tr class="border-b bg-indigo-100 border-neutral-100">
                           <td
                              class="whitespace-nowrap border-r px-6 py-4 font-medium border-neutral-100">
                              <?php echo $customer['Name']; ?>
                           </td>
                           <td
                              class="whitespace-nowrap border-r px-6 py-4 font-medium border-neutral-100">
                              <?php echo $customer['Age']; ?>
                           </td>
                           <td
                              class="whitespace-nowrap border-r px-6 py-4 font-medium border-neutral-100">
                              <?php echo $customer['Gender']; ?>
                           </td>
                           <td
                              class="whitespace-nowrap border-r px-6 py-4 font-medium border-neutral-100">
                              <?php echo $customer['Cart number']; ?>
                           </td>
                           <td
                              class="whitespace-nowrap border-r px-6 py-4 font-medium border-neutral-100">
                              <a href="cart.php?customer=<?php echo $customer['_id']; ?>">View Cart</a>
                           </td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>