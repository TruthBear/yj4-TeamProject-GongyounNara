<?php

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_profile']);
unset($_SESSION['user_role']);
unset($_SESSION['access_token']);

header("Location: index.php");

?>