<?php 
include 'conn.php';

if(isset($_POST['submit'])){  
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Messege = $_POST['message'];
    $query = "UPDATE pra SET Name='$Name',Email='$Email',Messege='$Messege' where  no='$Id'";
    $Add =mysqli_query($conn,$query) or die("connection error".mysqli_error() );

if($Add){
    echo "<h2> successfully updated</h2>";
}
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Sample Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" name="submit">update</button>
        </form>

    </div>
</body>
</html>
