<?php
session_start();
if (isset($_SESSION['name'])) {
    if (isset($_COOKIE['lastPage'])) {
        header("Location: {$_COOKIE['lastPage']}");
    } else {
        header("Location: a.php");
    }
} else {
    header("Location: auth.php");
}
