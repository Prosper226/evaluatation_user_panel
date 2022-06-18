<?php

    $user       = $_POST['user'];
    $quality1   = $_POST['quality1'];
    $quality2   = $_POST['quality2'];
    $quality3   = $_POST['quality3'];

    // print_r($_POST); exit;
    define('HOST',"http://".$_SERVER['HTTP_HOST'].'/');
    header('Location:'.HOST.'resume');
?>