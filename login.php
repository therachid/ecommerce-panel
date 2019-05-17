<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css.css"> 
</head>
<body class="align">

  <div class="grid">
    <!-- <a href="dashbord.php"><h1 class="text-center mt-3 text-secondary">Click back to the dashbord</h1></a> -->
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" class="form login">

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form__field">
          <input type="password" name="password" placeholder="Password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">

        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>

    </form>

  </div>

</body>
  
</body>
</html>
<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName="ecom_store";
$db =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myemail = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']); 
    
    $sql = "SELECT id FROM admin WHERE email = '$myemail' and nom  = '$password '";
    $result = mysqli_query($db,$sql);
 
    $count = mysqli_num_rows($result);
    
    // If result matched $myemail and $mypassword, table row must be 1 row
      
    if($count == true) {
      
       $_SESSION['login_user'] = $myemail;
       
       header("location: dashbord.php");
    }else{
      header("location:log-in.php");
      die();
     
   }
 }


?>