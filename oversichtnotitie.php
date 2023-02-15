<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }
include("head.php");
include 'dbconnection.php';

$result = mysqli_query($conn,"SELECT * FROM persoon_notitie");

?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Persoon id</td>
    <td>Titel</td>
    <td>Info</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["persoon_id"]; ?></td>
    <td><?php echo $row["titel"]; ?></td>
    <td><?php echo $row["info"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>