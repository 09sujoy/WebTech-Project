<?php

$PusernameErr = $PpasswordErr = "";
$Pusername = $Ppassword = "";
if (isset($_POST['Pusername']) && isset($_POST['Ppassword'])) 
{
  require 'Controller/checkloginData.php';
	if ($_POST['Pusername']==$Pusername && $_POST['Ppassword']==$Ppassword) 
  {
		$_SESSION['Pusername'] = $Pusername;
    $_SESSION['Ppassword'] = $Ppassword;
    $fetch = getID(	$_SESSION['Pusername'],$_SESSION['Ppassword']);
    $_SESSION['Pid']=$fetch[0];
    if(isset($_POST['remember_me']))
    {
    $time = time();
    setcookie('Pusername', $Pusername, $time+50);
    setcookie('Ppassword', $_POST['Ppassword'], $time+50);
    }
    header("location:welcome.php");
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["Pusername"])) 
  {
    $PusernameErr = "Name is required";
  } 
  else 
  {
    $Pusername = test_input($_POST["Pusername"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$Pusername))
    {
      $PusernameErr = "Only letters, white space, period, dash allowed";
      $Pusername="";
    }
    else if (str_word_count($Pusername)<2 ) 
    {
      $PusernameErr = "Minimum two words";
      $Pusername="";
    } 
    else if($_POST['Pusername']!=$Pusername) 
    {
      $PusernameErr = "User name Invalid "; 
      $Pusername="";
    }
  }

  if (empty($_POST["Ppassword"])) 
  {
    $PpasswordErr = "Password is required";
  } 
  else 
  {
    $Ppassword = test_input($_POST["Ppassword"]);
    if (strlen($Ppassword) <= 8)
    {
      $PpasswordErr = "Must be atleast 8 characters";
      $Ppassword="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$Ppassword)) 
    {
      $PpasswordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $Ppassword ="";
    } 
    else if($_POST['Ppassword']!=$Ppassword) 
    {
      $PpasswordErr = "Password Invalid "; 
      $Ppassword ="";
    }
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