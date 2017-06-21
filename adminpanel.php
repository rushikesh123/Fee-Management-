
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <title>Admin Panel</title>
        <style>
            body {
                background-image: url(admin.jpg);
                }
        </style>
    </head>
    
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> Admin Panel </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="addaccountant.php">Add Accountant</a></li>
        <li class="active"><a href="viewaccountant.php">View Accountant</a></li> 
        <li class="active"><a href="adminlogout.php">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>



</body>    


</html>
