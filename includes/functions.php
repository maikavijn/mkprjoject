<?php
session_start();
include 'dbconnection.php';

if ($_POST['inputnaam']) {
    $password = md5($_POST['inputwachtwoord']);
    $check_q = mysqli_query($conn, "SELECT * FROM gebruikers WHERE inputnaam='".addslashes($_POST['inputnaam'])."' AND inputwachtwoord='".$password."' AND actief = '1'") or die (mysqli_error($conn)); 
    if (mysqli_num_rows($check_q) == 0){
        $alert = 1;
    } else {
        while ($beheer = mysqli_fetch_object($check_q)){
            $_SESSION['login_id'] = $beheer->login_id;
            $_SESSION['inputnaam'] = $beheer->naam;
            $_SESSION['inputwachtwoord'] = $beheer->wachtwoord;
        }
        $_SESSION['inputnaam'] = $_POST['inputnaam'];
        $_SESSION['inputwachtwoord'] = $_POST['inputwachtwoord']; 

        Header("main.php");
    }
}


?>