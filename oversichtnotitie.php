<?php
include("head.php");
include 'dbconnection.php';

$result = mysqli_query($conn,"SELECT * FROM persoon_notitie");
?>

<div class="text-center">
    <br><h1> Overzicht Notitie's </h1>
</div>

    <div class='container'>
      <div class='row-fluid'>
        <div class='col-xs-6'>
		      <div class='table-responsive'>
            <table class='table table-hover table-inverse'>
            <thead>
            <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Onderwerp</th>
            <th scope='col'>Notitie</th>
            <th scope='col'>Datum</th>
            <th scope='col'>Update</th>
            <th scope='col'>Verwijder</th>
          </tr>
            </thead>
            <tbody>
  <?php if ($result->num_rows > 0){ ?>
    <?php while($row = $result->fetch_assoc()) {?>
      <tr>
    <td><?php echo $row["persoon_id"];?></td>
    <td><?php echo $row["titel"];?></td>
    <td><?php echo $row["info"];?></td>
    <td><?php echo $row["datum"];?></td>
    <td><a class="btn btn-primary active" href="updatenotitie.php?persoon_id=<?php echo $row['persoon_id'] ?>">Update notitie</a></td><br>
    <td><a class="btn btn-primary active" href="verwijdernotitie.php?notitie_id=<?php echo $row['notitie_id'] ?>">Verwijder notitie</a></td>
    </td>
    </tr>
  <?php  }
  } else {
    echo "<em>*Geen notitie gevonden*</em>";
  }?>
</tbody>
</table>