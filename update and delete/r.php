<?php 
include 'conn.php';
if(isset($_POST['submit'])){
    echo "<h1> gebre meskel <?h1>";
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Messege = $_POST['message'];
    $query = "INSERT INTO pra(Name,Email,Messege) VALUE ('$Name','$Email','$Messege')";
    $Add =mysqli_query($conn,$query) or die("connection error".mysqli_error());

}
if($Add){
    echo "<h2> successfully rigistered</h2>";
}

?>