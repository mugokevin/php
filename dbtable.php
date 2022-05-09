<?php
$servernname = "localhost";
$usernname = "root";
$password = "";
$dbname = "myDB";
//create connection

$conn = new mysqli($servernname, $usernname, $password, $dbname);


//sql to create table
$sql = "CREATE TABLE myDB(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";

if ($conn->query($sql)===TRUE){
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating the table:" .$conn->error;
}

$conn->close();