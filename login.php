<?php

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location:index.php?error=username is required");
        exit();
    } elseif (empty($pass)) {
        header("Location:index.php?error=password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
    }
} else {
    header("Location: index.php?error");
    exit();
}