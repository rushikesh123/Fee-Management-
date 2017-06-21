
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<?php
$query = "SELECT * FROM add_student";
$result = mysqli_query($con,$query);
?>

<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"> 
    
    <title>View Student</title>
    <style>
        body {
            background-image: url(aaaa.jpg);
        }
        
          input#inputreset {
            color: white;
            font-size: 18px;
            padding: 10px;
            margin: 20px auto;
            margin-top: 0px;
            border: 0px;
            background: orange;
            width: 80px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input#inputsubmit {
            color: white;
            font-size: 18px;
            padding: 10px;
            margin: 20px auto;
            margin-top: 0px;
            border: 0px;
            background: #0098cb;
            width: 80px;
            border-radius: 5px;
            cursor: pointer;
        }
        
    </style>
</head>

<body>
   
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
             <a class="navbar-brand" href="#">Fee Report</a> </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="addstudent.php">Add Student</a></li>
                <li class="active"><a href="#">View Student</a></li>
                <li class="active"><a href="#">Due Fee</a></li>
                <li class="active"><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
  
  <div class="container">
      
   <br><br>
   <div id="divtable" class="container">
      
      <div class="row">
          <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Language</td>
                <td>Fees</td>
                <td>Paid</td>
                <td>Address</td>
                <td>Contact No</td>
                </tr>
            </thead>
            
            <?php
    while($row = mysqli_fetch_array($result))
              {
                  echo '
                  <tr>
                  <td>'.$row["name"].'</td>
                    <td>'.$row["email"].'</td>  <td>'.$row["gender"].'</td>
                    <td>'.$row["lang"].'</td>
                    <td>'.$row["fees"].'</td>  <td>'.$row["paid"].'</td>
                    <td>'.$row["address"].'</td>
                    <td>'.$row["contactno"].'</td>  
                  </tr>
                  ';
              }
              ?>
          
          </table>
      </div>
        
   </div>
  </div>
   

<?php

$con->close();
?>            



 <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/app.js"></script>


</html>
