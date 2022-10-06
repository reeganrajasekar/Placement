<?php 
require("./db.php");

// Student
$sql = "CREATE TABLE student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(125) NOT NULL,
fname VARCHAR(120) NOT NULL,
dob VARCHAR(30) NOT NULL,
ugpoy VARCHAR(30) NOT NULL,
pgpoy VARCHAR(30) NOT NULL,
deg VARCHAR(30) NOT NULL,
dept VARCHAR(30) NOT NULL,
email VARCHAR(125) NOT NULL,
mob VARCHAR(30) NOT NULL,
ten VARCHAR(30) NOT NULL,
twel VARCHAR(30) NOT NULL,
ugcol VARCHAR(30) NOT NULL,
pgcol VARCHAR(30) NOT NULL,
addr blob NOT NULL,
list VARCHAR(30) NOT NULL,
place VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Setup Finished";
} else {
    echo "Setup Faild " . $conn->error;
}

$sql = "CREATE TABLE company (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    passwd VARCHAR(30) NOT NULL,
    allow VARCHAR(30) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Setup Finished";
    } else {
        echo "Setup Faild " . $conn->error;
    }
?>