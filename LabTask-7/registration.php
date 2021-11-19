<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="CSS/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>

 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['Pusername'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

 
<div class="div">
<fieldset>
<legend>REGISTRATION</legend>                 
  <form method="post"> 
  <label for="Pname">Name :</label>
  <input type="text" id="Pname" name="Pname">
  <span class="error"> <?php echo $PnameErr;?></span><hr>

  <label for="Pemail">Email :</label>
  <input type="text" id="Pemail" name="Pemail">
  <span class="error"> <?php echo $PemailErr;?></span><hr>

  <label for="Pmobile_number">Mobile Number :</label>
  <input type="tel" id="Pmobile_number" name="Pmobile_number" pattern="[0-9]{3}[0-9]{8}">
  <span class="error"> <?php echo $Pmobile_numberErr;?></span><hr>

  <label for="Paddress">Address :</label>
  <input type="text" id="Paddress" name="Paddress">
  <span class="error"> <?php echo $PaddressErr;?></span><hr>

  <label for="Pusername">UserName :</label>
  <input type="text" id="Pusername" name="Pusername">
  <span class="error"> <?php echo $PusernameErr;?></span><hr>
  
  
  <label for="Ppassword">Password :</label>
  <input type="password" id="Ppassword" name="Ppassword">
  <span class="error"> <?php echo $PpasswordErr;?></span><hr>

  <label for="Pconfirm_password">Confirm Password :</label>
  <input type="password" id="Pconfirm_password" name="Pconfirm_password">
  <span class="error"> <?php echo $Pconfirm_passwordErr;?></span><hr>


<fieldset>
<legend> Gender</legend> 
  <input type="radio" id="male" name="Pgender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="Pgender" value="Female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="Pgender" value="Other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $PgenderErr;?></span>
 </fieldset><hr>

<fieldset>
  <legend>Date of Birthday</legend>
  <input type="date" name="Pdob"> 
  <span class="error"> <?php echo $PdobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit" class="btn btn-info">
<input type="reset" name="reset" value="Reset">
<br><br>


</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  