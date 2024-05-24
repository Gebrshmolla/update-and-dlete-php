<?php 
include 'conn.php';
    $Id = $_GET['no'];
    $delete= "DELETE FROM pra where no='7'";
    if(mysqli_query($conn,$delete))
    {
      header('location: showinfo.php');
    
    }
    else{
    echo mysqli_error($db);
    }
    // if(isset($_GET['no'])) {
    //     $id = $_GET['no'];
    
    //     // Perform deletion
    //     $delete = "DELETE FROM pra WHERE no='$id'";
    //     if(mysqli_query($conn, $delete)) {
    //         // Redirect to showinfo.php after successful deletion
    //         header('location: showinfo.php');
    //         exit;
    //     } else {
    //         // Display error if deletion fails
    //         echo "Error: " . mysqli_error($conn);
    //     }
    
    //     // Now continue with your update logic...
    // } else {
    //     echo "No 'no' parameter received.";
    // }
    
   

?>