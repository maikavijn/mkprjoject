<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }
include("head.php");
include("dbconnection.php");
session_start();
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 18pt; margin-top: 10px;">Welkom <?php print $_SESSION['admin']['naam'];?></p> 
    </div>
  </div>
</body>