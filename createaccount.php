<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Create account</title>
</head>
<body>
<form class="form p-4" method="post">

  <label>User Naam:</label><br>
  <input type="text" id="usernaam" name="usernaam"><br><br>

  <label>Wachtwoord</label><br>
  <input type="text" id="wachtwoord" name="wachtwoord"><br><br>

  <label>Naam</label><br>
  <input type="text" id="naam" name="naam"><br><br>

  <input type="submit" value="Submit" name="submit">
</form> 

<?php
include 'dbconnection.php';

if(isset($_POST['submit'])){

$usernaam=$_POST['usernaam'];
$wachtwoord=$_POST['wachtwoord'];
$naam=$_POST['naam'];

$query = $conn->prepare("INSERT INTO login (usernaam, wachtwoord, naam) VALUES (?,?,?)");
$query->bind_param('sss',$usernaam,$wachtwoord,$naam);
$query->execute();
$query->store_result();

}
?>
</body>