<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['account'];
    $password = $_POST['password'];
    if (isset($_SESSION[$username])) {

        if ($_SESSION[$username] == $password) {
            $_SESSION['user'] = $username;
            $_SESSION['logged'] = true;
            echo "welcome! ".$_SESSION['user'];
            header("Location:welcome.html");
            die();
        } else {
            $_SESSION['logged'] = false;
            echo "Wrong account or password";
        }

    }
    else 
    {
        $_SESSION['logged'] = false;
        echo "No such account";
    }

}
?>