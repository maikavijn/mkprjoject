<?php
// include 'dbconnection.php';
// if (!$_SESSION['admin']['naam'] && !$_SESSION['admin']['wachtwoord']) {
// header("location: index.php");
// } else {
// include("head.php");
// }
include("head.php");
include 'dbconnection.php';

$query = "SELECT * FROM persoon_notitie WHERE persoon_id='".$_GET['persoon_id']."'";
$result = $conn->query($query);

while ($row = mysqli_fetch_array($result)) {
    $titel = $row['titel'];
    $info = $row['info'];
}

if(isset($_POST['submit'])){
    $titel = $_POST['titel'];
    $info = $_POST['info'];
    $datum = date("j-n-Y");
    
    $query2 = "UPDATE persoon_notitie SET titel='$titel', info='$info', datum='$datum'  WHERE persoon_id='".$_GET['persoon_id']."' ";
    $result = $conn->query($query2);
}
$conn->close();

?>

<div class="container d-flex justify-content-center">
<div class="col-sm-6">
<div class="card-body p-md-5">
<div class="container text-center">
  <h1>Update notitie</h1>
</div>
<form class="p-4 needs-validation" method="post">

<div class="form-group">
  <label for="name">Onderwerp*</label><br>
  <input type="text" class="form-control" id="titel" aria-describedby="" name="titel" style="width:400px;" value="<?php echo $titel; ?>" required><br>
</div>

<div class="form-group">
  <label for="adres">Notitie*</label><br>
  <input type="text" class="form-control" id="info" name="info" style="width:400px;" value="<?php echo $info; ?>" required><br>
</div>

  <input type="submit" class="btn btn-primary btn-block" value="Submit" name="submit">
</form> 
</div>
</div>
</div>