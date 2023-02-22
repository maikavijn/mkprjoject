<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <?php
    include('head.php');
    include("dbconnection.php");
    ?>
  <title>Beheer</title>
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center" style="font-size: 25pt; margin-top: 10px;">Welkom terug <?php echo $_SESSION['admin']['usernaam'];?></p> 
    </div>
  </div>

  <div class="d-flex justify-content-center">
  <form class="p-4 needs-validation" method="post">

<div class="form-group">
  <label for="name">Gebruikersnaam*</label>
  <input type="text" class="form-control" id="username" aria-describedby="" name="username" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="adres">Wachtwoord*</label>
  <input type="text" class="form-control" id="password" name="password" style="width:400px;" required><br>
</div>

<div class="form-group">
  <label for="postcode">Naam*</label>
  <input type="text" class="form-control" id="name" name="name" style="width:400px;" required><br><br>
</div>

  <input type="submit" class="btn btn-primary active" value="Submit" name="submit">
</form>
</div>

  <hr style="width: 100%" size="3" color="white"></hr>
  <div class="d-grid gap-2">
    <a class="btn btn-secondary" href="createaccount.php" role="button"> Maak een account aan </a>
  </div>
  
</body>
</html>
<?php
$query = "SELECT * FROM login WHERE login_id='".$_GET['login_id']."'";
$result = $conn->query($query);

while ($row = mysqli_fetch_array($result)) {
$login_id = $row['login_id'];
$username = $row['usernaam'];
$password = $row['wachtwoord'];
$name = $row['naam'];

exit;
}

if(isset($_POST['submit'])){
  $login_id = $row['login_id'];
  $username = $_POST['usernaam'];
  $password = $_POST['wachtwoord'];
  $name = $_POST['naam'];
  
  $query2 = "UPDATE login SET naam='$name', login_id='$login_id', usernaam='$username' WHERE login_id='".$_GET['login_id']."' ";
  $result = $conn->query($query2);

exit;
}
$conn->close();
?>