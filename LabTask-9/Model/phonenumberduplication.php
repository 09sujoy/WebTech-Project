<!-- <!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body> -->

<?php
require_once 'db_connect.php';

// $q = intval($_GET['q']);
$q = $_GET['q'];

$conn = db_conn();
    //$sql = "SELECT `demail` FROM `doctor` ;";
    echo $q;
    $sql = "SELECT * FROM `patient` WHERE `Pphone`= '".$q."';";


$result = $conn->query($sql);



if ($result->rowCount() > 0){
  echo"<br>";
  echo " sorry the phone number is already taken";
}

