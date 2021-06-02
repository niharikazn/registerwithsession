<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <style>
          * {
    margin: 0;
    padding: 0;
}
body {
    background-color:pink;
   margin:50px;
 color: rgb(77, 3, 77);
}   
.w{
     margin: 1rem;
     margin-top: 2%;
}
h2{
     font-weight: 1rem;
     font-size: 3rem;
}
h1{
     font-weight: 1rem;
     font-size: 6rem;
}
.t{
     margin: 1rem;
}
table, th, td {
  border: 1px solid black;
  
}
th,td{
     padding: 1rem;
}

   
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_POST['by']=='all')
{
     $sql = "SELECT `id`, `name`, `salary` FROM `hr`";
$result = $conn->query($sql);
echo"<br><br><h2>HR data</h2>";
echo "<table><tr><th>ID</th><th>Name</th><th>Salary</th></tr>";
while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["salary"]."</td></tr>";
   }
   echo "</table>";
   echo"<br><br><h2>Manager data</h2>";
   $sql = "SELECT `id`, `name`, `salary` FROM `manager`";
   $result = $conn->query($sql);
   echo "<table><tr><th>ID</th><th>Name</th><th>Salary</th></tr>";
   while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["salary"]."</td></tr>";
      }
      echo "</table>";
      echo"<br><br><h2>Sales data</h2>";
      $sql = "SELECT `id`, `name`, `salary` FROM `sales`";
      $result = $conn->query($sql);
      echo "<table><tr><th>ID</th><th>Name</th><th>Salary</th></tr>";
      while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["salary"]."</td></tr>";
         }
         echo "</table>";

}
else{
    $byy= $_POST["by"];

     $sql = "SELECT `id`, `name`, `salary` FROM `$byy`";
     $result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo"<br><br><h2>$byy</h2>";
     echo "<table><tr><th>ID</th><th>Name</th><th>Salary</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["salary"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
}
$conn->close();
?>


</body>

</html>
