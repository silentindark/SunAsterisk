<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$databse = 'crud';

$conn = mysqli_connect($localhost,$username,$password,$databse);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>