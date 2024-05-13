<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
 }
 else{
     echo " connection was sussessful<br>";
 }

// Assuming you have a valid database connection stored in $conn
$query = "SELECT * FROM class_1";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
//Display the rows returned by the sql query
// if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); 
    // echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
<thead>
<tr>
      <th scope="col">ID</th>
      <th scope="col">First_NAME</th>
      <th scope="col">Last_NAME</th>
      <th scope="col">Roll_No</th>
</tr>
</thead>
  <tbody>
<tr>
  <?php
    //we can use while loop to print all;
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
    ?>
       <td><?php echo $row['ID']; ?></td>
       <td><?php echo $row['F_Name']; ?></td>
       <td><?php echo $row['L_Name']; ?></td>
       <td><?php echo $row['Roll_No']; ?></td>
       </tr>
       <?php    
    }
?>
    </tr>
  </tbody>
</table>
</body>
</html>
