<?php
include 'dbconnection.php';
if (isset($_POST['usernaam'])) { 
$username = $_POST['usernaam'];
$password = $_POST['wachtwoord'];
$query = "SELECT * FROM login WHERE usernaam='$username' AND wachtwoord='$password'";
$result = $conn->query($query);

if(mysqli_num_rows($result) == 1){
    $_SESSION['usernaam'] = $username;
    $_SESSION['wachtwoord'] = $password;

    header('location: beheer.php');
    exit;
} else {
    ?>
    <div class="alert alert-danger position-absolute top-0 start-50 translate-middle-x" style="width:600px" role="alert">
        Onjuiste gebruikersnaam en/of wachtwoord - Probeer het opnieuw!
    </div><br><br>
    <?php
}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Index</title>
</head>
<body>

<div class="container d-flex justify-content-center">
<div class="col-sm-6">
<div class="card-body p-md-3">

<div class="container text-center">
    <h1> Inloggen voor beheer </h1><br><br>
</div>
    
<form class="form-signin" method="POST">
<div class="container">
<div class="row">
<div class="col form-outline mb-4">
    <label for="userlogin">Voor hier uw gebruikersnaam in</label><br>
    <input type="text" name="usernaam" class="form-control" placeholder="Naam" style="width:595px;" required>
</div>

<div class="col form-outline mb-4">
    <label for="adres">Voor hier uw wachtwoord in</label><br>
    <input type="password" name="wachtwoord" class="form-control" placeholder="Wachtwoord" style="width:595px;" required>
</div>

    <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
    </div>
</form>
    
</body>
</html>