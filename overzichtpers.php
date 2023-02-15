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
    <h1> Overzicht Personen </h1>
    <div class="pb-4">
      <a href="createpersoon.php" class="btn btn-secondary active" role="button" aria-pressed="true"> Persoon toevoegen </a>
    </div>
    <?php
  //   <table class="table">
  // <thead>
  //   <tr>
  //     <th scope="col">ID</th>
  //     <th scope="col">Naam</th>
  //     <th scope="col">Adres</th>
  //     <th scope="col">Plaats</th>
  //     <th scope="col">Geboortedatum</th>
  //     <th scope="col">Aanmelddatum</th>
  //   </tr>
  // </thead>
  // <tbody>
  // while ($row = $result -> fetch_assoc()) {
  //   echo "<tr>";
  //   echo "<td>" . $row["song"] . "</td>";
  //   echo "<td>" . $row["artist"] . "</td>";
  //   echo "<td>" . $row["year"] . "</td>";
  //   }
//     </tr>
//     <tr>
//       <th scope="row">2</th>
//       <td>Jacob</td>
//       <td>Thornton</td>
//       <td>@fat</td>
//     </tr>
//     <tr>
//       <th scope="row">3</th>
//       <td colspan="2">Larry the Bird</td>
//       <td>@twitter</td>
//     </tr>
//   </tbody>
// </table>
?>

    <?php 
    session_start();
    include("dbconnection.php");

    $sql = "SELECT persoon_id, naam, adres, postcode, plaats, gebdatum, aanmelddatum FROM gebruikers";
$result = $conn->query($sql);

if ($result->num_rows > 1) {
  while($row = $result->fetch_assoc()) {
    echo $row["persoon_id"]. " - Naam: " . $row["naam"]. " - Adres: " . $row["adres"]. " - Plaats: " . $row["plaats"]. " - Geboortedatum: " . $row["gebdatum"]. " - Aanmelddatum: " . $row["aanmelddatum"]. "<br><br>";
    echo '<a class="btn btn-primary active" href="updatepersoon.php?persoon_id=' . $row['persoon_id'] . '">Update persoon</a><br><br>';
    echo '<a class="btn btn-primary active" href="createnotitie.php?persoon_id=' . $row['persoon_id'] . '">Voeg notitie</a><br><br>';
    echo '<a class="btn btn-primary active" href="verwijderpersoon.php?persoon_id=' . $row['persoon_id'] . '">Verwijder persoon</a><br><br>';
    }
}
$conn->close();
?>    
</body>
</html>