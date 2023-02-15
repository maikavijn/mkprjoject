<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }
include("head.php");
include 'dbconnection.php';

if(isset($_POST['submit']))
{	 
	 $titel = $_POST['titel'];
	 $info = $_POST['info'];
   $datum = date("j-n-Y");
   $persoon_id = $_GET['persoon_id'];

	 $sql = "INSERT INTO persoon_notitie (titel, info, datum, persoon_id) VALUES ('$titel','$info','$datum', '$persoon_id')";

	 if (mysqli_query($conn, $sql)) {
		echo "Notitie toegevoegd!";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<form class="p-4 needs-validation" method="post">

<div class="form-group">
  <label for="name">Onderwerp: *</label><br>
  <input type="text" class="form-control" id="titel" aria-describedby="" name="titel" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="adres">Notitie: *</label><br>
  <input type="text" class="form-control" id="info" name="info" style="width:400px;" required><br>
</div>

  <input type="submit" class="btn btn-primary btn-lg active" value="Submit" name="submit">
</form> 