<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['account'];
    $password = $_POST['password'];
    if (isset($_SESSION[$username])) {
        echo "This account already exists";
    } else {
        $_SESSION[$username] = $password;
        echo "regist success(return to login in 2 seconds)";
        sleep(2);
        header("Location:main.html");
      

    }
}
?>