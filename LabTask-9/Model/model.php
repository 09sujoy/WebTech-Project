<?php 

require_once 'db_connect.php';

function addData($data){
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

function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `doctor` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `Name` = ?, `Email` = ?, `Mobile Number` = ?, `Address` = ?, `Shift` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['mobile_number'], $data['address'], $data['shift'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($Pid, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `patient` set `Ppassword` = ? where `Pid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $Pid
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePicture($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `doctor` set `Image` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `product_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showData($Pid){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `patient` where Pid = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$Pid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function getID($Pusername,$Ppassword)
{
    $conn = db_conn();
    $sql = "SELECT * FROM `patient` WHERE `Pusername`= '$Pusername'  and `Ppassword` = '$Ppassword' ;";
          $result = $conn->query($sql);
    if ($result->rowCount() > 0){
    $fetch = $result->fetch();
    return $fetch;

    }
    else{
        return "";
    }
    
}
?>