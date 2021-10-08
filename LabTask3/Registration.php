<!DOCTYPE HTML>  
<html>
<head>
</head>
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<body>  
<style>
.error {color: #FF0000;}
</style>
<style type="text/css">

  .ccc{
    color : green;
  }
  </style>

<?php
$nameErr = $addressErr = $phnumberErr = $emailErr = $genderErr = $dateofbirthErr = $bloodgroupErr = "";

$name = $address = $phnumber = $email = $gender = $dateofbirth = $bloodgroup = $count = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' .]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters and must have two word";
      $name="";
    }
  }

  

  
  
  
  if (empty($_POST["address"])) 
  {
    $addressErr= "Address is required";
  } 
  else 
  {
    $address = test_input($_POST["address"]);
    if (!preg_match("/^[a-zA-Z-' .]*$/",$address) || str_word_count($address)<2 )
    {
      $addressErr = "Only letters and must have two word";
      $address="";
    }
  }

  if (empty($_POST["phnumber"])) {
	    $phnumberErr = "Phone Number is required";
	  } 
    else {
	    $phnumber = test_input($_POST["phnumber"]);
	    
	    if (!preg_match("/^[0-9]*$/",$phnumber)) {
	      $phnumberErr = "Only numbers allowed";
        $phnumber="";
	    }
	  }

  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
    
  if (empty($_POST["birthday"])) 
  {
    $dateofbirthErr = "Date of Birth is required";
  } 
  else 
  {
    $dateofbirth = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }

 

    if (empty($_POST["bloodgroup"])) 
  {
    $bloodgroupErr = "Blood_Group is required";
  } 
  else 
  {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }

}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<div class="container" style="width:500px;">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<fieldset>
  
  <legend style= "font-size: 19px"><span class ="ccc">Patient Information </span></legend> <br><br>
  

 Patient's Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <br><br>


  Patient's Address: <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  <br><br>

    Patient's PhoneNumber: <input type="text" name="phnumber" value="<?php echo $phnumber;?>">
  <span class="error">* <?php echo $phnumberErr;?></span>
  <br><br>
  <br><br>



  Patient's E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <br><br>


 

  Patient's Date of Birth: <input type="date" name="birthday">
  <span class="error">* <?php echo $dateofbirthErr;?></span>
  <br><br>
  <br><br>
  
  Patient's Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <br><br>







  Patient's Blood Group:
  <select name="bloodgroup">
  <option></option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="A+") echo "checked";?> value="A+">A+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="A-") echo "checked";?> value="A-">A-</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="B+") echo "checked";?> value="B+">B+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="B-") echo "checked";?> value="B-">B-</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="O+") echo "checked";?> value="O+">O+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="O-") echo "checked";?> value="O-">O-</option>
   <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="AB+") echo "checked";?> value="AB+">AB+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="AB-") echo "checked";?> value="AB-">AB-</option>
  </select>

  <br><br>
 
  <input type="submit" name="submit" value="Submit" class="btn btn-info"/> <br><br>


</fieldset>
</form>


</body>
</html>
