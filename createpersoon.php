<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }
include("head.php");
?>
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

<a href="overzichtpers.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Terug naar overzicht </a><br>

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