
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Add Accountant</title>
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
            <div class="navbar-header"> <a class="navbar-brand disabled" href="#">Fee Management</a> </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="adminpanel.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="">
            <h1 style="margin-top:;margin-left:0.7em;color:#99CCFF;">
                 Add Accountant
             </h1>
            <div class="">
                <div style="margin-top:1em;" class="col-sm-5">
                    <div class="jumbotron">
                        <form role="form" action="addaccountant.php" method="post">
                            <div class="form-group"><br>
                                <label for="name">Name :</label>
                                <input type="text" class="form-control" required name="acc_name" id="name" placeholder="enter name"> </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" required name="acc_email" id="email" placeholder="enter email-id"> </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" required name="acc_pwd" id="pwd" placeholder="enter password">
                                <br> </div>
                                <br>
                           <input id="inputreset" type="reset">
                            <input id="inputsubmit" type="submit" type="submit" name="submit" value="sumbit" style="margin-left:150px">        
                                     </form>
                                     
<?php
if(isset($_POST['submit'])){
$name = $_POST['acc_name'];
    $email = $_POST['acc_email'];
    $pwd = $_POST['acc_pwd'];
   $submit = "insert into add_accountant (name,email,password) values('$name','$email','$pwd')";
    $run=mysqli_query($con,$submit);
    if($run){
        echo "Accountant Added succesfully";
    }

}

$con->close();
?>            

                                                  
</div>
</div>
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>

</html>
