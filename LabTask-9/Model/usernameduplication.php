

<?php
require_once 'db_connect.php';

// $q = intval($_GET['q']);
$q = $_GET['q'];

$conn = db_conn();
    //$sql = "SELECT `demail` FROM `doctor` ;";
    echo $q;
    $sql = "SELECT * FROM `patient` WHERE `Pusername`= '".$q."';";


$result = $conn->query($sql);




if ($result->rowCount() > 0){
  echo"<br>";
  echo " sorry the user name is already taken";
}



//mysqli_close($conn);
 ?>
<!--  </body>
 </html> -->