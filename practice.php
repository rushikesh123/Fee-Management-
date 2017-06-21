
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<?php
$query = "SELECT * FROM demo";
$result = mysqli_query($con,$query);
?>



<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"> 
   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script>
    $(document).ready(function(){
    $('#acc_data').DataTable();
});
    </script>
    
     <title>View Accountant</title>
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
        
        
        div#divtable {
            color: white;
            font-size: 20px;
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
                <li class="active"><a href="addstudent.php">Add Accountant</a></li>
                <li class="active"><a href="#">View Accountant</a></li>
                <li class="active"><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
   
   <br><br>
   
   <div class="table-responsive">
       
   <div id="divtable" class="container">
      
      <div class="row">
          <table id="acc_data" class="table table-hover  table-bordered display">
            <thead>
                <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                </tr>
            </thead>
            
            <?php
    while($row = mysqli_fetch_array($result))
              {
                  echo '
                  <tr>
                  <td>'.$row["name"].'</td>
                    <td>'.$row["email"].'</td>  <td>'.$row["password"].'</td>
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

<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
  
   
 