<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<link rel="stylesheet" href="CSS/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/style.js"></script>

</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['Pusername'])){require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/editshowData.php';
require 'Controller/editstoreData.php';
?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
  <form method="post"> 
  <label for="Pname">Name :</label>
  <input type="text" id="Pname" name="Pname" value="<?php echo $Pname ?>" onkeyup="checkName()" onblur="checkName()">
  <span class="error" id="PnameErr"> <?php echo $PnameErr;?></span><hr>

  <label for="Pemail">Email :</label>
  <input type="text" id="Pemail" name="Pemail" value="<?php echo $Pemail ?>" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="PemailErr"> <?php echo $PemailErr;?></span><hr>

  <label for="Pmobile_number">Mobile Number :</label>
  <input type="tel" id="Pmobile_number" name="Pmobile_number" pattern="[0-9]{3}[0-9]{8}" value="<?php echo $Pmobile_number ?>" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()">
  <span class="error" id="Pmobile_numberErr"> <?php echo $Pmobile_numberErr;?></span><hr>

  <label for="Paddress">Address :</label>
  <input type="text" id="Paddress" name="Paddress" value="<?php echo $Paddress ?>" onkeyup="checklocation()" onblur="checklocation()">
  <span class="error" id="PaddressErr"> <?php echo $PaddressErr;?></span><hr>

  <label for="Pusername">UserName :</label>
  <input type="text" id="Pusername" name="Pusername" value="<?php echo $Pusername?>" onkeyup="checkusername()" onblur="checkusername()">
  <span class="error" id="PusernameErr"> <?php echo $PusernameErr;?></span><hr>
  
  
  <label for="Ppassword">Password :</label>
  <input type="password" id="Ppassword" name="Ppassword" value="<?php echo $Ppassword ?>" onkeyup="checkPassword()" onblur="checkPassword()">
  <span class="error" id="PpasswordErr"> <?php echo $PpasswordErr;?></span><hr>


  <fieldset>
<b>Gender:</b>
  <select name="Pgender" id="Pgender" onkeyup="checkgender()" onblur="checkgender()">
  <!-- <option></option> -->
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="none") echo "checked";?> value="none"></option>
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="Male") echo "checked";?> value="Male">Male</option>
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="Female") echo "checked";?> value="Female">Female</option>
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="Other") echo "checked";?> value="Other">Other</option>

</select>
  <span class="error" id ="PgenderErr" > <?php echo $PgenderErr;?></span>
 </fieldset><hr>

<fieldset>
  <legend>Date of Birthday</legend>
  <input type="date" name="Pdob" id="Pdob" onkeyup="checkhedate()" onblur="checkhedate()"> 
  <span class="error" id="PdobErr"> <?php echo $PdobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  