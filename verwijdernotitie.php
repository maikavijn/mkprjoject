<?php
    include 'dbconnection.php';
    mysqli_query($conn, "DELETE FROM persoon_notitie WHERE notitie_id = '".$_GET['notitie_id']."'"); 
    header("location: oversichtnotitie.php"); 
?>