<?php 
require_once 'Model/model.php';
$fetch=getID($_SESSION['Pusername'],$_SESSION['Ppassword']);
		if($_POST['current_password'] == test_input($fetch[7]))
		{
			$password = test_input($fetch[7]);
			  return;
		}
?>