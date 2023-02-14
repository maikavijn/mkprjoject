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
    <title>Create account</title>
</head>
<body>

<form class="p-4 needs-validation" method="post">

<div class="form-group">
  <label for="name">Naam: *</label><br>
  <input type="text" class="form-control" id="naam" aria-describedby="" name="naam" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="adres">Adres: *</label><br>
  <input type="text" class="form-control" id="adres" name="adres" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="postcode">Postcode: *</label><br>
  <input type="text" class="form-control" id="postcode" name="postcode" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="plaats">Plaats: *</label><br>
  <input type="text" class="form-control" id="plaats" name="plaats" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="gebdatum">Geboorte Datum: *</label><br>
  <input type="text" class="form-control" id="gebdatum" name="gebdatum" placeholder="00-00-0000" style="width:400px;" required><br>
</div>

  <input type="submit" class="btn btn-primary btn-lg active" value="Submit" name="submit">
</form> 

<a href="overzichtpers.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Terug naar overzicht </a>

<?php
include 'dbconnection.php';

if(isset($_POST['submit'])){
$name=$_POST['naam'];
$adres=$_POST['adres'];
$postcode=$_POST['postcode'];
$plaats=$_POST['plaats'];
$gebdatum=$_POST['gebdatum'];
$aanmelddatum = date("j-n-Y");

$query = $conn->prepare("INSERT INTO gebruikers(naam, adres, postcode, plaats, gebdatum, aanmelddatum) VALUES (?,?,?,?,?,?)");
$query->bind_param('ssssss',$name,$adres,$postcode,$plaats,$gebdatum,$aanmelddatum);
$query->execute();
$query->store_result();
echo "Persoon is toegevoegd";
}
?>

</body>
</html>