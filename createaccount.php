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
<form class="form p-4" method="post">

  <label>Gebruikersnaam*</label><br>
  <input type="text" class="form-control" id="usernaam" aria-describedby="" name="usernaam" style="width:400px;" required><br>

  <label>Wachtwoord*</label><br>
  <input type="text" class="form-control" id="wachtwoord" aria-describedby="" name="wachtwoord" style="width:400px;" required><br>

  <label>Naam*</label><br>
  <input type="text" class="form-control" id="naam" aria-describedby="" name="naam" style="width:400px;" required><br>

  <input type="submit" class="btn btn-primary active" value="Submit" name="submit">
</form> 

<?php
include 'dbconnection.php';

if(isset($_POST['submit'])){

$usernaam=$_POST['usernaam'];
$wachtwoord=$_POST['wachtwoord'];
$naam=$_POST['naam'];

$query = $conn->prepare("INSERT INTO login (usernaam, wachtwoord, naam) VALUES (?,?,?)");
$query->bind_param('sss',$usernaam,$wachtwoord,$naam);
$query->execute();
$query->store_result();

}
?>
</body>