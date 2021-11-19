<?php 
require 'Model/model.php';
$data=showData($_SESSION['Pid']);

$Pid = $data["Pid"];
$Pname = $data["Pname"];
$Pemail= $data["Pemail"];
$Pphone = $data["Pphone"];
$Pdob = $data["Pdob"];
$Paddress = $data["Paddress"];
$Pusername= $data["Pusername"];
$Ppassword = $data["Ppassword"];
$Pgender= $data["Pgender"];
?>