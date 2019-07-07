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
	<h  style="color:blue;"> <b> ONGOING EVENTS </h>
<?php
$con=mysqli_connect("localhost","root","", "dbcon");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM event";
$result = mysqli_query($con, $query);
echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
while($row = mysqli_fetch_assoc($result)){
      $stringTest = $row['name'];
      echo "<span class='name'>" .$stringTest . "</span>";
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