<?php
require_once __DIR__ . '/vendor/autoload.php';

$connectionString = "mongodb+srv://admin-neeraj:kateelamma@cluster0.nrbkqml.mongodb.net/?retryWrites=true&w=majority";

$client = new MongoDB\Client($connectionString);

// Create the GrabNGo database and the Products and Customers collections
$grabNGoDB = $client->grabNGo;
$productsColl = $grabNGoDB->Products;
$customersColl = $grabNGoDB->Customers;

// Insert some product documents into the Products collection
$productDocs = array(
    array(
        'Product ID' => 101,
        'Product Name' => 'Pen',
        'Count' => 10
    ),
    array(
        'Product ID' => 102,
        'Product Name' => 'Pencil',
        'Count' => 5
    ),
    array(
        'Product ID' => 103,
        'Product Name' => 'Book',
        'Count' => 10
    ),
    array(
        'Product ID' => 104,
        'Product Name' => 'Zip',
        'Count' => 5
    ),
    array(
        'Product ID' => 105,
        'Product Name' => 'Pan',
        'Count' => 10
    ),
    array(
        'Product ID' => 106,
        'Product Name' => 'Cap',
        'Count' => 5
    ),
    array(
        'Product ID' => 107,
        'Product Name' => 'Shoe',
        'Count' => 10
    ),
    array(
        'Product ID' => 108,
        'Product Name' => 'Banana',
        'Count' => 5
    ),
    array(
        'Product ID' => 109,
        'Product Name' => 'Apple',
        'Count' => 10
    ),
    array(
        'Product ID' => 110,
        'Product Name' => 'Map',
        'Count' => 5
    )
);
$productsColl->insertMany($productDocs);

// Insert a customer document into the Customers collection, linking it to products with IDs 123 and 456
$customerDoc = array(
    array(
        'Name' => 'Neeraj',
        'Age' => 20,
        'Gender' => 'Male',
        'Cart number' => null,
        'Product IDs' => array(101, 102)
    ),
    array(
        'Name' => 'Pratham',
        'Age' => 30,
        'Gender' => 'Male',
        'Cart number' => null,
        'Product IDs' => array(101, 105)
    ),
    array(
        'Name' => 'Nelson',
        'Age' => 30,
        'Gender' => 'Male',
        'Cart number' => null,
        'Product IDs' => array(103, 104)
    )
);
$customersColl->insertMany($customerDoc);

// // Insert some product documents into the Products collection
// $productDocs = array(
//     array(
//         'Product ID' => 123,
//         'Product Name' => 'Widget',
//         'Count' => 10
//     ),
//     array(
//         'Product ID' => 456,
//         'Product Name' => 'Gizmo',
//         'Count' => 5
//     )
// );
// $productsColl->insertMany($productDocs);

// // Insert a customer document into the Customers collection, linking it to products with IDs 123 and 456
// $customerDoc1 = array(
//     'Name' => 'Alice',
//     'Age' => 30,
//     'Gender' => 'Female',
//     'Cart number' => 1,
//     'Product IDs' => array(123, 456)
// );
// $customersColl->insertOne($customerDoc1);

// $customerDoc2 = array(
//     'Name' => 'Neeraj',
//     'Age' => 20,
//     'Gender' => 'Male',
//     'Cart number' => 2,
//     'Product IDs' => array(456)
// );
// $customersColl->insertOne($customerDoc2);

// // Query the Customers collection to get the product IDs for each customer
// $customers = $customersColl->find();

// // Print the results
// foreach ($customers as $customer) {
//     // Get the product IDs for the current customer
//     $productIds = $customer['Product IDs'];
    
//     // Query the Products collection to get the product names for the current customer's product IDs
//     $products = $productsColl->find(array('Product ID' => array('$in' => $productIds)));
    
//     // Print the customer's name and the names of the products they ordered
//     echo "Customer: {$customer['Name']}\n";
//     foreach ($products as $product) {
//         echo "Product: {$product['Product Name']}\n";
//     }
// }

//Delete a database
// $result4 = $client->dropDatabase('newdb');
// var_dump($result4);

// List Databases
// foreach($client->listDatabases() as $db)
// {
//     var_dump($db);
// }

// Creating new database
// $companydb = $client->newdb;
// $result3 = $companydb->createCollection('newCollection');
// var_dump($result3);

// Delete a collection
// $result2 = $companydb->dropCollection('mycollection');

// List the collections
// foreach($companydb->listCollections() as $collection)
// {
//     var_dump($collection);
// }

// Create a new collection
// $result1 = $companydb->createCollection('mycollection');
// var_dump($result1);

?>