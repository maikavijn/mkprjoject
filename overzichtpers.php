<?php
session_start();
include("dbconnection.php");
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
$sql = "SELECT persoon_id, naam, adres, postcode, plaats, gebdatum, aanmelddatum FROM gebruikers";
				$result = $conn->query($sql);?>

    <div class='container'>
      <div class='row-fluid'>
        <div class='col-xs-6'>
		      <div class='table-responsive'>
            <table class='table table-hover table-inverse'>
            <thead>"
            <tr>"
            <th scope='col'>ID</th>"
            <th scope='col'>Naam</th>"
            <th scope='col'>Adres</th>"
            <th scope='col'>Plaats</th>"
            <th scope='col'>Geboortedatum</th>"
            <th scope='col'>Aanmelddatum</th>"
            <th scope='col'>Actie</th>"
          </tr>
            </thead>
            <tbody>
  <?php if ($result->num_rows > 0){ ?>
    <?php while($row = $result->fetch_assoc()) {?>
      <tr>
    <td><?php echo $row["persoon_id"];?></td>
    <td><?php echo $row["naam"];?></td>
    <td><?php echo $row["adres"];?></td>
    <td><?php echo $row["postcode"];?></td>
    <td><?php echo $row["plaats"];?></td>
    <td><?php echo $row["gebdatum"];?></td>
    <td><a class="btn btn-primary active" href="updatepersoon.php?persoon_id=' . $row['persoon_id'] . '">Update persoon</a></td>
    <td><a class="btn btn-primary active" href="createnotitie.php?persoon_id=' . $row['persoon_id'] . '">Voeg notitie</a></td>
  	<td><a class="btn btn-primary active" href="verwijderpersoon.php?persoon_id=<?php echo $row['persoon_id'] ?>">Verwijder Persoon</a></td>
    </td>
    </tr>
  <?php  }
  } else {
    echo "0 results";
  }?>
</tbody>
</table>

    <?php 
//echo '<a class="btn btn-primary active" href="updatepersoon.php?persoon_id=' . $row['persoon_id'] . '">Update persoon</a>';
    //echo '<a class="btn btn-primary active" href="createnotitie.php?persoon_id=' . $row['persoon_id'] . '">Voeg notitie</a>';
    //echo '<a class="btn btn-primary active" href="verwijderpersoon.php?persoon_id=' . $row['persoon_id'] . '">Verwijder persoon</a>';

    //session_start();
    //include("dbconnection.php");

   // $sql = "SELECT persoon_id, naam, adres, postcode, plaats, gebdatum, aanmelddatum FROM gebruikers";
//$result = $conn->query($sql);

//if ($result->num_rows > 1) {
//  while($row = $result->fetch_assoc()) {
//    echo $row["persoon_id"]. " - Naam: " . $row["naam"]. " - Adres: " . $row["adres"]. " - Plaats: " . $row["plaats"]. " - Geboortedatum: " . $row["gebdatum"]. " - Aanmelddatum: " . $row["aanmelddatum"]. "<br><br>";
 //   echo '<a class="btn btn-primary active" href="updatepersoon.php?persoon_id=' . $row['persoon_id'] . '">Update persoon</a>';
  //  echo '<a class="btn btn-primary active" href="createnotitie.php?persoon_id=' . $row['persoon_id'] . '">Voeg notitie</a>';
  //  echo '<a class="btn btn-primary active" href="verwijderpersoon.php?persoon_id=' . $row['persoon_id'] . '">Verwijder persoon</a>';
//    }
//}
//$conn->close();
?>    
</body>
</html>
<?php
//  while ($row = $result -> fetch_assoc()) {
//    echo "<tr>";
//    echo "<td>" . $row["persoon_id"] . "</td>";
//    echo "<td>" . $row["naam"] . "</td>";
//    echo "<td>" . $row["adres"] . "</td>";
//    echo "<td>" . $row["postcode"] . "</td>";
//    echo "<td>" . $row["plaats"] . "</td>";
//    echo "<td>" . $row["gebdatum"] . "</td>";
//    }
   // session_start();
   // include("dbconnection.php");
//
//    $sql = "SELECT persoon_id, naam, adres, postcode, plaats, gebdatum, aanmelddatum FROM gebruikers";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 1) {
//  while($row = $result->fetch_assoc()) {
//    echo $row["persoon_id"]. " - Naam: " . $row["naam"]. " - Adres: " . $row["adres"]. " - Plaats: " . $row["plaats"]. " - Geboortedatum: " . $row["gebdatum"]. " - Aanmelddatum: " . $row["aanmelddatum"]. "<br><br>";
//    echo '<a class="btn btn-primary active" href="updatepersoon.php?persoon_id=' . $row['persoon_id'] . '">Update persoon</a><br><br>';
//    echo '<a class="btn btn-primary active" href="createnotitie.php?persoon_id=' . $row['persoon_id'] . '">Voeg notitie</a><br><br>';
//    echo '<a class="btn btn-primary active" href="verwijderpersoon.php?persoon_id=' . $row['persoon_id'] . '">Verwijder persoon</a><br><br>';
//    }
//}
//$conn->close();
?>