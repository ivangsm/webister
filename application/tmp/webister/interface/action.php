<?php

/*
 * Adaclare Technologies
 *
 * Webister Hosting Software
 *
 *
 */
 session_start();
 function onlyadmin () {
     if ($_SESSION['user'] == 'admin') {
         
     } else {
         die();
     }
}
onlyadmin();
if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=main');
    die();
}
require 'py-serv-client.php';
if ($_GET['act'] == 'pwr') {
    sendmessage('pwr');
    header('Location: index.php?page=cp');
    die();
}
if ($_GET['act'] == 'restart') {
    sendmessage('restart');
    header('Location: index.php?page=cp');
    die();
}
if ($_GET['act'] == 'mysql') {
    sendmessage('mysql');
    header('Location: index.php?page=cp');
    die();
}
if ($_GET['act'] == 'server') {
    sendmessage('server');
    header('Location: index.php?page=cp');
    die();
}