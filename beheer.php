<?php
include 'dbconnection.php';
if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
header("location: index.php");
} else {
include("beheer.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Index</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 18pt; margin-top: 10px;">Welkom <?php print $_SESSION['admin']['naam'];?></p> 
    </div>
  </div>

    <a href="createpersoon.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create
            Person</a>

</body>