<!DOCTYPE html>
<html>
<head>
    <title>Volunteer CareWorks Foundation</title>
<style>
body {
   background-color: #cccccc;
}
     h1{
       color: teal;
        font-weight: 600;
        font-family: Montserrat,sans-serif;
    }
    h2{
        color: tomato;
        font-family: Montserrat,sans-serif;
    }
button{
	color:white;
	background-color:green;
	border-radius:3px;
}
a { color: #FF0000; }
#example2 {
    border: 1px transparent;
    padding: 10px;
    border-radius: 5px 2px;
    box-shadow:4px 4px 4px #888;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
#ima{
margin-top: 200px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
<script>
    function approveSchool(var i)
    {
        document.getElementBy("id"+i).style.display=none;
    }
</script>
</head>
<body>
    <?php
include_once 'amisha.php';
    ?>
<h1 align="center">Careworks Foundation</h1>
<h2 align="center">Volunteers</h2>
<br><hr><br>
<?php
//if(isset($_POST['view']))
//{
  echo "<center><table>";
  $qry="select name,email,contact,area,pin from volunteer";
  $rs=mysqli_query($con,$qry)
  or die(mysql_error());
  $count=mysqli_num_fields($rs);
  echo "<table border='3'><tr><th>NAME</th><th>EMAIL</th><th>PHONE</th><th>AREA</th><th>PINCODE</th>
  </tr>";
  while($row=mysqli_fetch_array($rs))
  {
    echo "<tr>";
    for($i=0;$i<$count;$i++)
    { 
          echo "<td>$row[$i]</td>";
    }
    echo "</tr>";
  }
  echo "</table></center>";
    
    echo "<br><br>";
    
  
  
//}
?>

<br><hr>
<div id="ima" align="center"><img src="logo.png" alt="background"></div>
    <br><br>
</body>
</html>