<html>
<head>
<style>
.name {
  background-color: orange;
  color: black;
  margin: 80px;
  padding: 50px;
} 
</style>
<body>
	<h  style="color:blue;"> <b> ALL EVENTS </h>
<?php
$con=mysqli_connect("localhost","root","", "dbcon");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query1 = "SELECT * FROM allevent";
$result1 = mysqli_query($con, $query1);
echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
while($row1 = mysqli_fetch_assoc($result1)){
      $stringTest1 = $row1['name'];
      echo "<span class='name'>" .$stringTest1 . "</span>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";


}
?>
</body>
</head>
</html>