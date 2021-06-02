<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//session_start();
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);
if (isset($_POST['login']) && !empty($_POST['uname']) && !empty($_POST['upass'])) {
$name=$_POST['uname'];
$pass=md5($_POST['upass']);
$sql="SELECT `name` from `reg` where `name`='$name' and `pass`='$pass'";
$r=$conn->query($sql);
$row = mysqli_fetch_array($r,MYSQLI_ASSOC);
$count = mysqli_num_rows($r);
if($count == 1){
   
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
     header("Location:welcome.php");
}
else 
echo '<script>alert("Invalid Credentials")</script>';	
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registerationform</title>
</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">SIGN IN</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" name="uname" id="name" placeholder="Enter UserName" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="upass" id="pass" placeholder="Your Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signup" class="form-submit" value="Login"/>
                                <a href="">&nbsp; &nbsp;Not a Member</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
 
    </div>
    <footer>
        <div class="copy-right">
          <div class="container">
            <div class="copy-right-card">
             <p>2015 @ All Rights Reserved Designed and developed by<a
                 href="https://www.smarteyeapps.com">Niharika Jain</a></p>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>