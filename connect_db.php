<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'qgmvc';
    $con = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_errno()){
        echo "Connect Fail: ".mysqli_connect_errno();exit();
    }

?>