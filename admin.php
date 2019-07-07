<!DOCTYPE html>
<html>
    <title>Careworks Foundation</title>
<style>
input[type=email],input[type=password], select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
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
</style>
<body>
    <center>
<h1>Careworks Foundation</h1>
<h3>ADMIN LOGIN</h3>
</center>
<div>
    <center>
  <form action="adminlogin.php" method="post">
    <label for="fname">username</label>
    <input type="email" id="fname" name="email" placeholder="Your name...">
<br>
    <label for="lname">password</label>
    <input type="password" id="lname" name="password" placeholder="Your password...">
      <br><br>
    <input type="submit" value="Submit">
  </form></center>
</div>
</body>
</html>
<?php 
// Start session
session_start(); 

// Username and password
$ID = "admin@gmail.com";
$pass = "123456";

if (isset($_POST["username"]) && isset($_POST["password"])) { 

    if ($_POST["username"] === $ID && $_POST["password"] === $pass) { 
    
    $_SESSION["inloggedin"] = true; 

    header("Location: start.php"); 
    exit; 
    } 
        // Wrong login - message
        else {$wrong = "Bad ID and password, the system could not log you in";} 
}
?> 