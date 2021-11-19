<?php 
require 'Model/model.php';
$data=getID($_POST['Pusername'], $_POST['Ppassword']);
if($data!= null)
{
	if ($_POST['Pusername']==$data[6] && $_POST['Ppassword']==$data[7]) 
	{
		$Pusername = $data[6];
  		$Ppassword = $data[7];
		$Pid = $data[0];
  		return;
	}
}
?>