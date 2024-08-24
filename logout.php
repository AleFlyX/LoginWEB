<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout']))
{
  unset($_SESSION['logged']);
  header("Location:main.html");
}
?>