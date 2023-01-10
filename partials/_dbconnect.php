<?php
$server = "localhost";
$Username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $Username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>