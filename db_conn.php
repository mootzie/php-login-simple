<?php

$sname = "localhost";
$uname = "root";
$pword = "";
$db_name = "login-simple-test";

$conn = mysqli_connect($sname, $uname, $pword, $db_name);

if (!$conn) {
    echo "connection failed! ";
}