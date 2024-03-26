<?php

include "../config/const.php";

$type;
$sql;

if(isset($_POST)){
  $data = file_get_contents("php://input");
  $json = json_decode($data, true);
  
  $type = $json['type'];
  $sql = $json['sql'];

  if($type == "look") {
    $result = mysqli_query($db_connect, $sql);
    $num = mysqli_num_rows($result);
    $arr = array();
    
    if($num > 0) {
      while($row = mysqli_fetch_array($result)) {
        $arr[] = $row;
      }
    }

    echo json_encode($arr);
  }
  
  

  
}

?>