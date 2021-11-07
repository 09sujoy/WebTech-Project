<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<link rel="stylesheet" href="CSS/style.css"> 
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
  <input type="text" id="Pname" name="Pname" value="<?php echo $Pname ?>">
  <span class="error"> <?php echo $PnameErr;?></span><hr>

  <label for="Pemail">Email :</label>
  <input type="text" id="Pemail" name="Pemail" value="<?php echo $Pemail ?>">
  <span class="error"> <?php echo $PemailErr;?></span><hr>

  <label for="Pmobile_number">Mobile Number :</label>
  <input type="tel" id="Pmobile_number" name="Pmobile_number" pattern="[0-9]{3}[0-9]{8}" value="<?php echo $Pmobile_number ?>">
  <span class="error"> <?php echo $Pmobile_numberErr;?></span><hr>

  <label for="Paddress">Address :</label>
  <input type="text" id="Paddress" name="Paddress" value="<?php echo $Paddress ?>" >
  <span class="error"> <?php echo $PaddressErr;?></span><hr>

  <label for="Pusername">UserName :</label>
  <input type="text" id="Pusername" name="Pusername" value="<?php echo $Pusername?>">
  <span class="error"> <?php echo $PusernameErr;?></span><hr>
  
  
  <label for="Ppassword">Password :</label>
  <input type="password" id="Ppassword" name="Ppassword" value="<?php echo $Ppassword ?>">
  <span class="error"> <?php echo $PpasswordErr;?></span><hr>



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
</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  