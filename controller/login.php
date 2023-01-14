<?php
session_start();

$correctUser = "PracticasSIO";
$correctPassword = "12345";


$user = $_POST["user"];
$password = $_POST["password"];


if ($user === $correctUser && $password === $correctPassword) {

   $_SESSION["user"] = $user;

    header("Location: ../view/user_profile.php");
} else {

    header("Location: ../view/login_error.php");

}
