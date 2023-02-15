<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }


?>
<?php
include("head.php");
include 'dbconnection.php';

$result = mysqli_query($conn,"SELECT * FROM persoon_notitie");
?>

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
    <td><a class="btn btn-primary active" href="updatenotitie.php?persoon_id=<?php echo $row['persoon_id'] ?>">Update notitie</a></td><br>
    <td><a class="btn btn-primary active" href="verwijdernotitie.php?notitie_id=<?php echo $row['notitie_id'] ?>">Verwijder notitie</a></td>
    </td>
    </tr>
  <?php  }
  } else {
    echo "Geen notitie gevonden";
  }?>
</tbody>
</table>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <!-- <table> -->
  
  <!-- <tr>
    <td>Persoon id</td>
    <td>Titel</td>
    <td>Info</td>
  </tr> -->
<?php
//$i=0;
//while($row = mysqli_fetch_array($result)) {
?>
<!-- <tr>
    <td><?php echo $row["persoon_id"]; ?></td>
    <td><?php echo $row["titel"]; ?></td>
    <td><?php echo $row["info"]; ?></td>
    <td><a class="btn btn-primary active" href="updatenotitie.php?persoon_id=<?php echo $row['persoon_id'] ?>">Update notitie</a></td><br>
    <td><a class="btn btn-primary active" href="verwijdernotitie.php?notitie_id=<?php echo $row['notitie_id'] ?>">Verwijder notitie</a></td>
</tr> -->
<?php
//$i++;
}
?>
</table>
 <?php
// }
// else{
//     echo "No result found";
// }
?>