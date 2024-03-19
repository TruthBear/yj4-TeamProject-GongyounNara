<?php

include 'config/const.php';

$id = $_POST['id'];
$pw = $_POST['pw'];
$email = $_POST['email'];
$name = $_POST['name'];
$created_at = date("Y-m-d H:i:s");

$sql = "insert into member(id, password, email, name, created_at) ";
$sql .= "values('$id', '$pw', '$email', '$name', '$created_at')";

mysqli_query($db_connect, $sql);
mysqli_close($db_connect);

header("Location: index.php");



?>