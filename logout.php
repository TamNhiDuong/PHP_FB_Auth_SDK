<?php

session_destroy();
if(!isset($_SESSION['access_token'])){
  unset($_SESSION['access_token']);
  header('location:login.php');
	exit();
}
?>