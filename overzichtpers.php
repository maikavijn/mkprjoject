<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
</head>
<body>
    <h1> Overzicht Personen </h1>
    <?php 
    session_start();
    include("dbconnection.php");

    $sql = "SELECT persoon_id, naam, adres, postcode, plaats, gebdatum, aanmelddatum FROM gebruikers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<a href="updatepersoon.php"> . $row["persoon_id"]</a>'. " - Naam: " . $row["naam"]. " - Adres: " . $row["adres"]. " - Plaats: " . $row["plaats"]. " - Geboortedatum: " . $row["gebdatum"]. " - Aanmelddatum: " . $row["aanmelddatum"]. "<br><br>";
  }
}
$conn->close();
?>
    
</body>
</html>