<?php

require_once __DIR__ . "/vendor/autoload.php";

$connectionString =
    "mongodb+srv://admin-neeraj:kateelamma@cluster0.nrbkqml.mongodb.net/?retryWrites=true&w=majority";

$client = new MongoDB\Client($connectionString);

$grabNGoDB = $client->grabNGo;
$customersColl = $grabNGoDB->Customers;

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$cartNumber = null;
$productIDs = [null];

$customerDoc = [
    "Name" => $name,
    "Age" => $age,
    "Gender" => $gender,
    "Cart number" => $cartNumber,
    "Product IDs" => $productIDs,
];

$customersColl->insertOne($customerDoc);

$folder_name = $_POST["name"];
$uploads_dir = "C:/xampp/htdocs/GrabNGo/labels/" . $folder_name . "/";
if (!file_exists($uploads_dir)) {
    mkdir($uploads_dir);
}
$success = true;
$count = count(glob($uploads_dir . "*"));
foreach ($_FILES["file-upload"]["tmp_name"] as $index => $tmp_name) {
    $count++;
    $file_name =
        $count .
        "." .
        pathinfo($_FILES["file-upload"]["name"][$index], PATHINFO_EXTENSION);
    if (!move_uploaded_file($tmp_name, $uploads_dir . $file_name)) {
        $success = false;
    }
}
if ($success) {
    header("Location: face_recognition.php");
    exit();
} else {
    echo "File upload failed!";
}
?>
