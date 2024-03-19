<?php 

class db_info {
  const HOST = "localhost";
  const USER = "user1";
  const PASSWORD = "12345";
  const DB = "nara";
}


$db_connect = mysqli_connect(db_info::HOST, db_info::USER, db_info::PASSWORD, db_info::DB);

?>