<?php
    include 'dbconnection.php';
    // delete persoon
    mysqli_query($conn, "DELETE FROM gebruikers WHERE persoon_id = '".$_GET['persoon_id']."'");
    //delete notitie die bij persoon zat gekoppeld
    mysqli_query($conn, "DELETE FROM persoon_notitie WHERE persoon_id = '".$_GET['persoon_id']."'");

        header('location: overzichtpers.php');
?>