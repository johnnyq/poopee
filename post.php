<?php

include "config.php";
include "check_login.php";  

if(isset($_GET['approve_user'])){
    $user_id = intval($_GET['approve_user']);

    mysqli_query($mysqli,"UPDATE users SET user_access = 1 WHERE user_id = $user_id");
    echo "<script>window.location = 'users.php'</script>";
}

if(isset($_GET['delete_user'])){
    $user_id = intval($_GET['delete_user']);

    mysqli_query($mysqli,"DELETE FROM users WHERE user_id = $user_id");
    echo "<script>window.location = 'users.php'</script>";
}


if(isset($_GET['pee'])){

    mysqli_query($mysqli,"INSERT INTO logs SET log_date = UNIX_TIMESTAMP(now()), cat_id = 1, user_id = $session_user_id");
    echo "<script>window.location = 'index.php'</script>";
}

if(isset($_GET['poo'])){

    mysqli_query($mysqli,"INSERT INTO logs SET log_date = UNIX_TIMESTAMP(now()), cat_id = 2, user_id = $session_user_id");
    echo "<script>window.location = 'index.php'</script>";
}

if(isset($_GET['clear'])){

    mysqli_query($mysqli,"DELETE FROM logs WHERE user_id = $session_user_id");
    echo "<script>window.location = 'records.php'</script>";
}

?>