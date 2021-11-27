<?php

require 'Model/model.php';
require 'Model/jsonCode.php';

if (isset($_SESSION['Pusername'])){}
else
  {  $Pname = $Pemail = $Pmobile_number =  $Paddress = $Pusername=  $Ppassword = $Pconfirm_password = $Pgender =  $Pdob = $encrypted_password = '';}

$PnameErr = $PemailErr = $Pmobile_numberErr  = $PaddressErr = $PusernameErr=  $PpasswordErr = $Pconfirm_passwordErr = $PgenderErr =  $PdobErr = '';
$flag=1;
$update="on";  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["Pname"])) 
  {
    $PnameErr = "Name is required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $Pname = test_input($_POST["Pname"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$Pname))
    {
      $PnameErr = "Only letters, white space, period, dash allowed ";
      $Pname="";
      $flag=0;
      $update="off";
    }
  }

      
  if (empty($_POST["Pemail"])) 
  {
    $PemailErr = "Email is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $Pemail = test_input($_POST["Pemail"]);
    if (!filter_var($Pemail, FILTER_VALIDATE_EMAIL)) 
    {
      $PemailErr = "Invalid email format";
      $Pemail="";    
      $flag=0;
      $update="off";
    }
  }


  if (empty($_POST["Pmobile_number"])) 
  {
    $Pmobile_numberErr = "Mobile Number is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $Pmobile_number = test_input($_POST["Pmobile_number"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['Pmobile_number']))
    {
      $Pmobile_numberErr = "Invalid Number";
      $Pmobile_number="";
      $flag=0;
      $update="off";
    }
  }

  

  if (empty($_POST["Paddress"])) 
  {
    $PaddressErr = "Address is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $Paddress = test_input($_POST["Paddress"]);
  }

  if (empty($_POST["Pusername"])) 
  {
    $PusernameErr = "Name is required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $Pusername = test_input($_POST["Pusername"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$Pusername) || str_word_count($Pusername)<2 )
    {
      $PusernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $Pusername="";
      $flag=0;
      $update="off";
    }
  }




  if (empty($_POST["Ppassword"])) 
  {
    $PpasswordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $Ppassword = test_input($_POST["Ppassword"]);
    if (strlen($Ppassword) < 8)
    {
      $PpasswordErr = "Must be atleast 8 characters";
      $Ppassword="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$Ppassword)) 
    {
      $PpasswordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $Ppassword ="";
      $flag=0;
    }
  }

  if (empty($_POST["Pconfirm_password"])) 
  {
    $Pconfirm_passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $Pconfirm_password = test_input($_POST["Pconfirm_password"]);
    if($Pconfirm_password!=$Ppassword)
    {
      $Pconfirm_passwordErr = "Password dosen't match";
      $Pconfirm_password="";
      $flag=0;
    }
  }

  if(empty($_POST["Pgender"]))  
  {  
    $PgenderErr = "Select Gender"; 
    $flag=0;
    $update="off"; 
  }
  else
  {
    $Pgender = test_input($_POST["Pgender"]);
  } 


  if(empty($_POST["Pdob"]))  
  {  
    $PdobErr = "Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $Pdob = test_input($_POST["Pdob"]);
    if (time() < strtotime('+18 years', strtotime($Pdob))) 
    {
      $PdobErr = 'Minimum 18+';
      $flag=0;  
      }
  }
  //echo "sujoy";

  if ($flag==1) 
  {
    //echo "sujoy flag-1";
    if(isset($_POST["submit"]))  
    {
      echo "sujoy submit";
      writeToJson();
      $data['Pname'] = $_POST['Pname'];
      $data['Pemail'] = $_POST['Pemail'];
      $data['Pmobile_number'] = $_POST['Pmobile_number'];
      $data['Paddress'] = $_POST['Paddress'];
      $data['Pusername'] = $_POST['Pusername'];
      $data['Ppassword'] = $_POST['Ppassword'];
      $data['Pconfirm_password'] = $_POST['Pconfirm_password'];
      $data['Pgender'] = $_POST['Pgender'];
      $data['Pdob'] = $_POST['Pdob'];
      if (addData($data)) 
      {
        echo '# Successfully Updated';
      }
  

      //$encrypted_password = password_hash($_POST['Ppassword'], PASSWORD_BCRYPT, ["cost" => 10]);
      //if(addData($encrypted_password))
      //{
      //  echo 'Registration Completed';
      //}
    }  
  }
  // if($update=="on")
  // {
  //   if(isset($_POST["submit"]) && isset($_SESSION['Pusername']))
  //   {
  //     $data['Pname'] = $_POST['Pname'];
  //     $data['Pemail'] = $_POST['Pemail'];
  //     $data['Pmobile_number'] = $_POST['Pmobile_number'];
  //     $data['Paddress'] = $_POST['Paddress'];
  //     $data['Pusername'] = $_POST['Pusername'];
  //     $data['Ppassword'] = $_POST['Ppassword'];
  //     $data['Pconfirm_password'] = $_POST['Pconfirm_password'];
  //     $data['Pgender'] = $_POST['Pgender'];
  //     $data['Pdob'] = $_POST['Pdob'];
  
  //     if (updateData($_SESSION['id'], $data)) 
  //     {
  //       echo 'Successfully Updated';
  //     }
  //   }
  // }    
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>