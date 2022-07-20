<?php

include '../config.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
  header("Location: add.php");
}


if (isset($_POST["signin"])) {
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $password = mysqli_real_escape_string($conn,md5($_POST["password"]));

  $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND password='$password'");

  if(mysqli_num_rows($check_email) > 0 && $email === "admin@gmail.com"){
    $row=mysqli_fetch_assoc($check_email);
    $_SESSION['user_id']=$row['id'];
    header("Location: add.php");
  }else{
    echo "<script>alert('Email or password is incorrect')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <title>Sign in & Sign up Form - Pure Coding</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="email" value="<?php echo $_POST["email"] ?>" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST["password"] ?>"/>
          </div>
          <input type="submit" value="Login" name="signin" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Admin Login</h3>

        </div>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
 
</body>

</html>