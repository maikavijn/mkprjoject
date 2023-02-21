<?php
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
<div class="text-center">
    <br><h1> Overzicht Personen </h1>
</div>

<div class="pb-4 text-center">
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
            <thead>
            <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Naam</th>
            <th scope='col'>Adres</th>
            <th scope='col'>Plaats</th>
            <th scope='col'>Geboortedatum</th>
            <th scope='col'>Aanmelddatum</th>
            <th scope='col'>Aanpassen</th>
            <th scope='col'>Voeg notitie</th>
            <th scope='col'>Verwijder</th>
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
    <td><a class="btn btn-primary active" name="btnupdate" href="updatepersoon.php?persoon_id=<?php echo $row['persoon_id'] ?>">Update persoon</a></td>
    <td><a class="btn btn-primary active" name="btnadd" href="createnotitie.php?persoon_id=<?php echo $row['persoon_id'] ?>">Voeg notitie</a></td>
  	<td><a class="btn btn-primary active" name="btndelete" href="verwijderpersoon.php?persoon_id=<?php echo $row['persoon_id'] ?>">Verwijder Persoon</a></td>
    </td>
    </tr>
  <?php  }
  } else {
    echo "Geen personen gevonden";
  }?>
</tbody>
</table>   
</body>
</html>