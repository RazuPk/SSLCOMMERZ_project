<?php

include 'config.php';
if ($_SESSION['user'] == TRUE) {
    $message = "Welcome" . " " . $_SESSION['user'];
} else {
    header("Location:index.php");
}
?>