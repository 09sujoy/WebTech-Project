<?php
  function writeToJson() 
  {
    if(file_exists('Json/data.json'))  
      {  
        $current_data = file_get_contents('Json/data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'Pname'            =>     $_POST['Pname'],
        'Pemail'           =>     $_POST['Pemail'],
        'Pmobile_number'   =>     $_POST['Pmobile_number'],
        'Paddress'         =>     $_POST['Paddress'],
        'Pusername'        =>     $_POST['Pusername'],
        'Ppassword'        =>     $_POST['Ppassword'],
        'Pconfirm_password'=>    $_POST['Pconfirm_password'],
        'Pgender'           =>      $_POST["Pgender"],  
        'Pdob'              =>      $_POST["Pdob"]);  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Json/data.json', $final_data))  
        {  
          echo "Information Updated Successfully";
        } 
      } 
      else  
      {  
        echo "JSON File not exits";  
      }
  }

function readFromJson($file) 
  {
    $data = file_get_contents($file);
    $data = json_decode($data, true);
    return $data;
  }
 
?>