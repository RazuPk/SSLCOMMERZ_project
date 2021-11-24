<?php

include 'config.php';
$db = new Database();
$conn = $db->db_connect();

if (isset($_POST['username']) && isset($_POST['psw'])) {
    $user = $_POST['username'];
    $pass = $_POST['psw'];
    $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE name='$user' AND pass='$pass'");
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pass'] = $row['pass'];
        sleep(2);
        echo '1';
    } else {
        echo '0';
    }
}


if (isset($_POST['action'])) {
    unset($_SESSION['user']);
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    echo 'logout';
}