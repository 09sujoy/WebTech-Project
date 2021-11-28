<?php
function editaddData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `patient`(`Pname`, `Pemail`, `Pphone`, `Pdob`, `Paddress`, `Pusername`,  `Ppassword`, `Pgender`)  VALUES (:Pname, :Pemail, :Pmobile_number, :Pdob, :Paddress, :Pusername, :Ppassword, :Pgender)";
    try{  

        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':Pname' => $_POST['Pname'],
            ':Pemail' => $_POST['Pemail'],
            ':Pmobile_number' => $_POST['Pmobile_number'],
            ':Pdob' => $_POST['Pdob'],
            ':Paddress' => $_POST['Paddress'],
            ':Pusername' => $_POST['Pusername'],
            ':Ppassword' => $_POST['Ppassword'],
            ':Pgender' => $_POST['Pgender']
            ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}






?>

