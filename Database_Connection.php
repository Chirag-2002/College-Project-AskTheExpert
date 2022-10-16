<?php

/*
This File contains the databases configuration 
*/

$servername="localhost";
$password="";
$username="root";
$database_name="registration";

// Try Connecting to the database

$conn=mysqli_connect($servername,$username,$password,$database_name);

// Check the Connection

if ($conn==false){
    die("Connection Failed".mysqli_connect_error());
}

?>