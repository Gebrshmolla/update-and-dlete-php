<?php 

include 'conn.php';
$query = "SELECT *FROM  pra";
$Add =mysqli_query($conn,$query);
if($Add->num_rows > 0){
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Message</th><th>Update</th><th>Delete</th>";
    while($row= $Add->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Messege']."</td>";
        echo "<td><a href='update.php?id=" . $row['no'] . "'>Update</a></td>";

       echo "<td><a href='delete.php?id=" . $row['no'] . "'>Delete</a></td>";
        echo "<tr>";
    //    echo "<tr><td>".$row['Name']."</td>
    //    <td>" .$row['Email']."</td>
    //    <td>".$row['Messege']."</td>
    //    <tr>";
    }
    echo "<table>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:500px;
           border-collapse:collapse;
            border:1px solid gray;
        }
        th{
            background-color:green;
            padding:5px;
        }
  tr:nth-child(even) {
    background-color: #gray;
}
    </style>
</head>
<body>
    
</body>
</html>