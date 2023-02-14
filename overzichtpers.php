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
    echo $row["persoon_id"]. " - Naam: " . $row["naam"]. " - Adres: " . $row["adres"]. " - Plaats: " . $row["plaats"]. " - Geboortedatum: " . $row["gebdatum"]. " - Aanmelddatum: " . $row["aanmelddatum"]. "<a href='updatepersoon.php?persoon_id=$row'> Wijzig persoon </a>" . "<br><br>";
    }
}
$conn->close();
?>

<a href="createpersoon.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Persoon toevoegen </a>
    
</body>
</html>