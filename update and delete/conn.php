<?php 
$server = 'localhost';
$name = 'root';
$password = '';
$dbname = 'goggle';
$conn =new mysqli($server,$name,$password,$dbname);
if($conn->connect_error){
    die("connection error happend".$conn->connect_error);
}
else{
 // echo "sucsseccfully";
}

?>