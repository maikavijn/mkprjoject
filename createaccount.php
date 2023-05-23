<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <?php include 'dbconnection.php';?>
  <title>Account aanmaken</title>
</head>
<body>

<div class="container d-flex justify-content-center">
<div class="col-sm-6">
<div class="card-body p-md-5">

<div class="container text-center">
    <h1> Maak hier een account aan </h1><br><br>
</div>
    
<form class="form-signin" method="POST">
<div class="container">
<div class="row">
<div class="col form-outline mb-4">
<label>Gebruikersnaam*</label><br>
  <input type="text" class="form-control" id="usernaam" aria-describedby="" name="usernaam" style="width:530px;" required>
</div>

<div class="col form-outline mb-4">
<label>Wachtwoord*</label><br>
  <input type="password" class="form-control" id="wachtwoord" aria-describedby="" name="wachtwoord" style="width:530px;" required>
  <input type="checkbox" onclick="toggle()"><strong>Show password</strong>
</div>

<div class="col form-outline mb-4">
<label>Naam*</label><br>
  <input type="text" class="form-control" id="naam" aria-describedby="" name="naam" style="width:530px;" required>
</div>

    <button class="btn btn-primary btn-block" name="submit" type="submit">Aanmaken</button>
    </div>
    </div>
</form>

<hr style="width: 100%" size="3" color="white"></hr>
  <div class="d-grid gap-2">
    <a class="btn btn-danger" href="beheer.php" role="button"> Ga terug </a>
  </div>

<?php

if(isset($_POST['submit'])){

$usernaam=$_POST['usernaam'];
$wachtwoord=bin2hex($_POST['wachtwoord']);
$naam=$_POST['naam'];

$query = $conn->prepare("INSERT INTO login (usernaam, wachtwoord, naam) VALUES (?,?,?)");
$query->bind_param('sss',$usernaam,$wachtwoord,$naam);
$query->execute();
$query->store_result();

}
?>
<script>
function toggle() {
            var temp = document.getElementById("wachtwoord");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
</script>
</body>
</html>