<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['Pusername'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend>PROFILE</legend>

<div class="justLeft">
  <p>Id               :   <?php echo $Pid ?></p><hr>
  <p>Name             :   <?php echo $Pname ?></p><hr>
  <p>Email            :   <?php echo $Pemail ?></p><hr>
  <p>Mobile Number    :   <?php echo $Pphone ?></p><hr>
  <p>Date of Birthday :   <?php echo $Pdob ?></p><hr>
  <p>Address          :   <?php echo $Paddress ?></p><hr>
  <p>UserName         :   <?php echo $Pusername ?></p><hr>
  <p>Password         :   <?php echo $Ppassword ?></p><hr>
  <p>Gender           :   <?php echo $Pgender ?></p>
</div> 

<div class="justRight">
  <img class="proPic" 
  src="Uploads/<?php 
  if ($image!=null){echo $image; $_SESSION['pic']=$image;} 
  else{echo "pic.png";}
  ?>" alt="Profile Picture"> 
  <div class="textCenter"> <a href="changeProfilePicture.php" >Change Profile Picture</a>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<a href="editProfile.php" class="btn btn-info">Edit Profile</a>
<a href="changePassword.php" class="btn btn-info">Change Password</a>
<br><br><br><br><br><br><br><br><br><br><br>
</fieldset> 
</div>


<?php require 'Bar/footer.php';?>
</body>  
</html> 