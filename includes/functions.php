<?php
session_start();
include 'dbconnect.php';

if ($_POST['naam']) {
    $password = md5($_POST['wachtwoord']);
    $check_q = mysqli_query($conn, "SELECT * FROM login WHERE gebruiker='".addslashes($_POST['naam'])."' AND wachtwoord='".$password."' AND actief = '1'") or die (mysqli_error($conn)); 
    if (mysqli_num_rows($check_q) == 0){
        $alert = 1;
    } else {
        while ($beheer = mysqli_fetch_object($check_q)){
            $_SESSION['login_id'] = $beheer->login_id;
            $_SESSION['naam'] = $beheer->naam;
            $_SESSION['wachtwoord'] = $beheer->wachtwoord;
        }
        $_SESSION['naam'] = $_POST['naam'];
        $_SESSION['wachtwoord'] = $_POST['wachtwoord']; 

        Header("main.php");
    }
}


?>