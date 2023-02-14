<?php
    include 'dbconnection.php';
    mysqli_query($conn, "DELETE FROM gebruikers WHERE persoon_id = '".$_GET['persoon_id']."'"); 
    // header("location: overzichtpers.php"); 
?>