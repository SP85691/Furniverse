<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "furniverseuserdata";

$conn = mysqli_connect($server_name, $username, $password, $database_name);
if (!$conn) {
    die("connection Failed:" . mysqli_connect_error());
} else {
    echo "Status : Running Boss..............     ";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfodata (name,email,phone,comment)
    VALUES ('$name','$email','$phone','$comment')";

if (mysqli_query($conn, $query)) {
    echo "OUTPUT: ";
    echo " Fedback Received";
} else {
    echo "Error: " . $query . "" . mysqli_error($conn);
}

header('location:contact.php');

?>