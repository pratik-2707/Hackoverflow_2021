<?php
if(isset($_POST['email'])) {
$server = "localhost" ;
$username = "root" ;
$password = "" ;

$con =  mysqli_connect($server,$username,$password) ;

if(!$con) {
die("connection failed" . mysqli_connect_error()) ;
}
// else {
//     echo "success" ;
// }
$temp = 1 ;
$email = $_POST['email'] ;
$pass = $_POST['pass'];
$parkslot = 0;
$parkslot++;

$sql = "INSERT INTO parking.users ( `email`, `pass`, `date`,`parkslot`) VALUES ('$email', '$pass', current_timestamp(),'$parkslot');";

// echo $sql;


if(($con->query($sql))==true) {
    echo "Successfully registered" ;
    
}
else {
    echo "error " ;
}

$con->close() ;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Safe</title>
    <link rel = "stylesheet" href = "style.css"> 
    <style>
               h1 {
                    color: black;
                    font-size : 70px;
                    margin : 100px;
                    background-color :white;
                    text-align:center;
                    font-family: Impact;
                }
                #wel {
                  color: black;
                  white-space: nowrap;
                  width: 200px;
                  text-align:center;
                  background-color :#79ffc4;
                  border: 2px solid #7994e1;
                  overflow: hidden;
                  text-overflow: clip;
                  font-family: Impact;
                  margin: auto;
                  width: 50%;
                  padding: 10px;
                }
                #sign{
                    border-style: dashed;
                    background-color :#f1faeb;
                    margin-left: auto;
                    margin-right: auto;
                    width: 30%;
                    padding: 15px;
                }
                table, th, td {  
                border: 1px solid black;  
                border-collapse: collapse;  
                }  
                th, td {  
                padding: 10px;  
                }  
                table#alter tr:nth-child(even) {  
                background-color: #eee;  
                }  
                table#alter tr:nth-child(odd) {  
                background-color: #fff;  
                }  
                table#alter th {  
                color: white;  
                background-color: gray;  
                }  
      </style>
</head>

<body>
    
    <main>
        <h1>BOOK A PARKING LOCATION</h1>

        <div id="wel"><h2>WELCOME USER</h2>
        Sign in to ensure your parking space!</div>
        <br><br>
        <div id = "sign" class = "sign">
            <h3><center>Make an account</center><h3>
                <form action="index.php" method = "post" >
                    <input type="email" name = "email" class = "input-box" placeholder="Email">
                    <input type="password" name = "pass" class = "input-box" placeholder="Password">
                    <button type = "submit" class = "signup-button">sign up</button>
                    <hr>
                    <!-- <p class = "or">or</p>
                    <p>already have an account<a href= "#">sign in<a> -->
                </form>
                <nav><a href="http://localhost/parking/userdet.php">Login</a></nav>
        </div>
        <br><br>
        <script src="index.js"></script>

        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27392.806699073484!2d75.80876799999999!3d30.883839999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1635568947551!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1GBFZkww-4m5uBJsQPqpr9SozJL299M9o" width="640" height="480"></iframe>

</body>
</html>
