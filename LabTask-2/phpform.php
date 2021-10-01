<!DOCTYPE HTML>  
<html>
<head>
</head>
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
$nameErr = $emailErr = $genderErr = $dateofbirthErr = $bloodgroupErr = "";

$name = $email = $gender = $dateofbirth = $bloodgroup = $count = "";



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

<h2>PHP Validation Form </h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<fieldset>
  
  <legend style= "font-size: 19px"><span class ="ccc">Patient Information </span></legend> <br><br>
  

 Patient's Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
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
 
  <p><input type="submit" name="submit" value="Submit"> </p> 

</fieldset>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $dateofbirth;
echo "<br>";

echo $gender;
echo "<br>";

echo $bloodgroup;
echo "<br>";



?>

</body>
</html>
