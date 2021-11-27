<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/style.js"></script>

</head>
<body>
<?php 
session_start();
if (isset($_SESSION['Pusername'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'controller/loginCheck.php';
?>

<div class="div">
<form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>LOGIN</legend>


  <label for="Pname">User name :</label>
  <input type="text" id="Pusername" name="Pusername" value="" onkeyup="checkusername()" onblur="checkusername()" <?php if(isset($_COOKIE['Pusername'])){echo $_COOKIE['Pusername'];} ?>">
  <span class="error" id="PusernameErr"> <?php echo $PusernameErr;?></span>
  <br><br>

  <label for="Ppassword">Password :</label>
  <input type="password" id="Ppassword" name="Ppassword" value="" onkeyup="checkPassword()" onblur="checkPassword()"<?php if(isset($_COOKIE['Ppassword'])){echo $_COOKIE['Ppassword'];} ?>">
  <span class="error" id="PpasswordErr"> <?php echo $PpasswordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"  class="btn btn-info"><br><br><br><a href="forgotPassword.php"  class="btn btn-info">Forgot Password?</a>

 </fieldset>
</form> 
</div>

<?php require 'Bar/footer.php';?>

</body>
</html>