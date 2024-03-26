<?php

include "../config/const.php";

$type;
$sql;
$message;
$isDuplicate;

if(isset($_POST)) {
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
    mysqli_close($db_connect);
    echo json_encode($arr);

  } else if($type == "delete") {
    mysqli_query($db_connect, $sql);
    $message = "삭제완료";
    echo json_encode($message);

  } else if($type = "check") {
    $result = mysqli_query($db_connect, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record) {
    $isDuplicate = false;
    echo json_encode($isDuplicate);
  
   }else {
    $isDuplicate = true;
    echo json_encode($isDuplicate);
   }
  }
}
?>