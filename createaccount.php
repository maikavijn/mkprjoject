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

  <label>User Naam:</label><br>
  <input type="text" id="usernaam" name="usernaam"><br><br>

  <label>Wachtwoord</label><br>
  <input type="text" id="wachtwoord" name="wachtwoord"><br><br>

  <label>Naam</label><br>
  <input type="text" id="naam" name="naam"><br><br>

  <input type="submit" value="Submit" name="submit">
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