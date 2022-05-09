<?php
$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn= new mysqli($servername, $username, $password);
//check conn
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
echo "connection succesful";
//creating a database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) == TRUE){
    echo "database created successfully";
} else {

    echo "error creating database".$conn->error;
}
$conn->close();
?>
