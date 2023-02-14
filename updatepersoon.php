<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Create account</title>
</head>
<bod>
    <?php 
    include 'dbconnection.php';
    $query = "SELECT * FROM gebruikers WHERE persoon_id='".$_GET['persoon_id']."'";
    $result = $conn->query($query);

    while ($row = mysqli_fetch_array($result)) {
    $persoon_id = $row['persoon_id'];
    $name = $row['naam'];
    $adres = $row['adres'];
    $postcode = $row['postcode'];
    $plaats = $row['plaats'];
    $gebdatum = $row['gebdatum'];

  }

  
if(isset($_POST['submit'])){
    $name = $_POST['naam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $gebdatum = $_POST['gebdatum'];
    $aanmelddatum = date("j-n-Y");
    
    $query2 = "UPDATE gebruikers SET  naam='$name', adres='$adres', postcode='$postcode', plaats='$plaats', gebdatum='$gebdatum', aanmelddatum='$aanmelddatum'  WHERE persoon_id='".$_GET['persoon_id']."' ";
    $result = $conn->query($query2);
}
$conn->close();

?>

<form class="p-4 needs-validation" method="post">

<div class="form-group">
  <label for="name">Naam: *</label><br>
  <input type="text" class="form-control" id="naam" aria-describedby="" name="naam" style="width:400px;" value="<?php echo $name; ?>" required><br>
</div>

<div class="form-group">
  <label for="adres">Adres: *</label><br>
  <input type="text" class="form-control" id="adres" name="adres" style="width:400px;" value="<?php echo $adres; ?>" required><br>
</div>

<div class="form-group">
  <label for="postcode">Postcode: *</label><br>
  <input type="text" class="form-control" id="postcode" name="postcode" style="width:400px;" value="<?php echo $postcode; ?>" required><br>
</div>

<div class="form-group">
  <label for="plaats">Plaats: *</label><br>
  <input type="text" class="form-control" id="plaats" name="plaats" style="width:400px;" value="<?php echo $plaats; ?>" required><br>
</div>

<div class="form-group">
  <label for="gebdatum">Geboorte Datum: *</label><br>
  <input type="text" class="form-control" id="gebdatum" name="gebdatum" style="width:400px;" value="<?php echo $gebdatum; ?>" required><br>
</div>

  <input type="submit" class="btn btn-primary active" value="Submit" name="submit">
</form> 

<a href="overzichtpers.php" class="btn btn-primary active" role="button" aria-pressed="true"> Terug naar overzicht </a><br>

</body>