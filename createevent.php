<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>CREATE EVENT</h3>

<div class="container">
  <form action="adminlogin.php" method="post" enctype="multipart/form-data">
    <label for="fname">Name of the Event</label>
    <input type="text" id="name" name="fname" placeholder="name of the event..">

    <label for="date">Date</label>
    <input type="date" id="date" name="date" placeholder="Date of the event..">
    <br>
    <br>
    <label for="location">Location</label>
    <select id="location" name="location">
      <option value="bangalore">Bangalore</option>
      <option value="chennai">Chennai</option>
      <option value="hyderabad">Hyderabad</option>
    </select>
    <br>
    Select image to upload:
    <br>
    <br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <br>
    <input type="submit" value="Upload Image" name="submit">
    <br>
    <br>
    <label for="subject">About</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <label for="skill">Skills Required for the Event</label>
    <input type="text" id="eskill" name="skill" placeholder="skills required for the event..">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
<?php
session_start();
if(isset($_SESSION["POST"])){
session_destroy();
}
include_once 'amisha.php';
//$ref=@$_GET['q'];
$name = $_POST["fname"];
$result = mysqli_query($con,"INSERT event ('name') VALUES ($name)") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
$name = $row['fname'];
}
$_SESSION["fname"] = $name;
}
if(isset($_SESSION["fname"]))
header("location:admin_homepage.html");
else
echo "<h1 style='color:red'>wrong username or password</h1>";
?>