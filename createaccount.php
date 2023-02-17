<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }
?>
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
  <title>Account aanmaken</title>
</head>
<body>

<div class="row">
  <div class="col-md-auto">
<h1>Maak hier een account aan</h1>
</div>
<div class="col">
</div>
<div class="col col-lg-2">
<br><a href="index.php" class="btn btn-danger">Terug</a>
</div>
</div>
<form class="form p-4" method="post">

  <label>Gebruikersnaam*</label><br>
  <input type="text" class="form-control" id="usernaam" aria-describedby="" name="usernaam" style="width:400px;" required><br>

  <label>Wachtwoord*</label><br>
  <input type="text" class="form-control" id="wachtwoord" aria-describedby="" name="wachtwoord" style="width:400px;" required><br>

  <label>Naam*</label><br>
  <input type="text" class="form-control" id="naam" aria-describedby="" name="naam" style="width:400px;" required><br>

  <input type="submit" class="btn btn-primary active" value="Submit" name="submit">
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
</html>