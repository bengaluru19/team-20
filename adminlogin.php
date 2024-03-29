<!DOCTYPE html>
<html>
<head>
    <title>ADMIN - DASHBOARD</title>
<style>
body {
  background-image: url("banner.jpg");
  background-repeat: no-repeat , repeat;
  background-size: cover;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #444;
}
li {
    float: left;
    margin: 10px;
}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: #4CAF50;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
#ima{
margin-top: 200px;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block;
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
</head>
<body >

<h1 align="center">Careworks Foundation</h1>
<h2 align="center">Admin Homepage</h2>
    
<ul>
    <center>
        <li><a href="createevent.html">Create Event</a></li>
  <li><a href="ongoing.php">Ongoing Event</a></li>
  <li><a href="allevent.php">All Events</a></li>
  <li><a href="volunteer.php">All Volunteers</a></li>
  <li><a href="request.html">Volunteers Request</a></li>
  <li><a href="report1.php">Report Generation</a></li>
  <li><a href="plan.html">Things to do</a></li>
  <li><a href="logout.php">Logout</a></li>
</center>
</ul>

<div id="ima" align="center"><img src="logo.png" alt="background"></div>

</div>
</body>
</html>