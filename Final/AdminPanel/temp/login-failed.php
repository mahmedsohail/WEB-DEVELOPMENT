<?php include("../../helpers/config.php");?>

<?php
if (isset($_POST['submit'])) { 
    $Username = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($Password);


    $Query = "SELECT * FROM superadmin WHERE username = '$Username'  AND securepassword = '$SecurePassword'";
    $Result = mysqli_query($conn, $Query);
    
    if (mysqli_num_rows($Result) > 0) {
        $row = mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID'] = $row->id;
        $_SESSION['USER_NAME'] = $row->username;
        $_SESSION['FULL_NAME'] = $row->firstname . " " . $row->lastname;
        header('Location: index.php');
        exit();
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin | Ahmed</title>
  <link rel="stylesheet" href="../css/login-failed.css">
  
</head>
<body>
  <section>
    <!-- Your span elements here -->
    <div class="signin">
      <div class="content">
        <h2>Sign In</h2>
        <!-- Replaced <div class="form"> with <form class="form"> -->
        <div class= "form">
          <div class="inputBox">
            <input type="text" required> <i>Username</i>
          </div>
          <div class="inputBox">
            <input type="password" required> <i>Password</i>
          </div>
          <!-- <div class="links">
            <a href="#">Forgot Password</a>
            <a href="#">Signup</a>
          </div> -->
          <div>
            <input type="submit" value="Login">
          </div>
        </div> <!-- Changed </div> to </form> -->
      </div>
    </div>
  </section>
</body>
</html>
