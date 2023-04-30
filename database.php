<?php
session_start();
//session_destroy();
require_once __DIR__ . "/vendor/autoload.php";

// Initialize the cart number stack
if (!isset($_SESSION["cartNumber"])) {
    $_SESSION["cartNumber"] = [4, 3, 2, 1];
}

$connectionString =
    "mongodb+srv://admin-neeraj:kateelamma@cluster0.nrbkqml.mongodb.net/?retryWrites=true&w=majority";

$client = new MongoDB\Client($connectionString);

// Create the GrabNGo database and the Products and Customers collections
$grabNGoDB = $client->grabNGo;
$productsColl = $grabNGoDB->Products;
$customersColl = $grabNGoDB->Customers;

if (isset($_POST["label"])) {
    $label = $_POST["label"];

    // Query the Customers collection for a document with a matching Name field
    $customer = $customersColl->findOne(["Name" => $label]);

    // If a matching customer is found, update the Cart number field
    if ($customer) {
        $customerId = $customer["_id"];
        $cartNumber = $customer["Cart number"];

        // If the cart number is null, update it with the value from the top of the stack
        if (is_null($cartNumber)) {
            $newCartNumber = array_pop($_SESSION["cartNumber"]);
            $customersColl->updateOne(
                ["_id" => $customerId],
                ['$set' => ["Cart number" => $newCartNumber]]
            );
        } else {
            // Otherwise, update the top of the stack with the current cart number
            array_push($_SESSION["cartNumber"], $cartNumber);
            $newCartNumber = null;
            $customersColl->updateOne(
                ["_id" => $customerId],
                ['$set' => ["Cart number" => $newCartNumber]]
            );
        }

        $response = ["message" => "Cart number updated for customer $label"];
    } else {
        $response = ["message" => "No customer found with name $label"];
    }

    // Return a JSON response with a message indicating whether the update was successful
    header("Content-Type: application/json");
    echo json_encode($response);
} else {
    header("Content-Type: application/json");
    echo json_encode(["message" => "No label value provided"]);
}

?>
