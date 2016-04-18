<?php
session_start();

var_dump($_REQUEST);
var_dump($_SESSION);

if ($_REQUEST['username'] == 'florian' && $_REQUEST['password'] == '123456') {
    echo 'Login successful!';
    $_SESSION['logged_in'] = true;
} else {
    echo 'Login failed!';
}
?>