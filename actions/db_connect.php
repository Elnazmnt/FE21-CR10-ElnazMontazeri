<?php 

$hostname = "127.0.0.1";
$username = "root"; 
$password = "";
$dbname = "fswd14_cr10_elnazmontazeri_biglibrary";

// create connection, you need to be aware of the order of the parameters
$connect = new mysqli($hostname, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
   die("Connection failed: " . $connect->connect_error);
// }else {

//     echo "Hi Elnaz, Successfully Connected";

}