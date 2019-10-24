<?php
include 'file.php';

if (isset($_POST['FirstName'])) {
    $userName = $_POST['FirstName'];
}
if (isset($_POST['LastName'])) {
    $age = $_POST['LastName'];
}

if (isset($_POST['phoneNumber'])) {
    $phoneNumber = $_POST['phoneNumber'];
}

if (isset($_POST['email'])) {
    $city = $_POST['email'];
}

if (isset($_POST['date'])) {
    $city = $_POST['date'];
}





// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    printf('could not connect:' . $conn->connect_error);
    exit();
}

// prepare and bind variables

$sql = "INSERT INTO store.customers(userName, age, phoneNumber,city) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siis",$userName, $age, $phoneNumber, $city);


$stmt->execute();