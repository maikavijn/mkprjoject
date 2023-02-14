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

    $query = $conn->prepare("SELECT * FROM gebruikers WHERE persoon_id ");
    $conn = $query->execute();
    
    while ($row = mysqli_fetch_object($conn)) {
      $naam = $row['naam'];
      $adres = $row['adres'];
      $postcode = $row['postcode'];
      $plaats = $row['plaats'];
      $gebdatum = $row['gebdatum'];

  }
  ?>
  <form class="form p-4" method="post">

  <label for="name">Naam:</label><br>
  <input type="text" id="naam" name="naam"  value="<?php echo $naam; ?>"><br><br>

  <label for="adres">Adres</label><br>
  <input type="text" id="adres" name="adres" value="<?php echo $adres; ?>"><br><br>

  <label for="postcode">Postcode</label><br>
  <input type="text" id="postcode" name="postcode" value="<?php echo $postcode; ?>"><br><br>

  <label for="plaats">Plaats</label><br>
  <input type="text" id="plaats" name="plaats" value="<?php echo $plaats; ?>"><br><br>

  <label for="gebdatum">Geboorte Datum</label><br>
  <input type="text" id="gebdatum" name="gebdatum" value="<?php echo $gebdatum; ?>"><br><br>

  <input type="submit" value="Submit" name="submit">
</form> 
</body>