<?php 
session_start();
include 'dbconnection.php';

if(isset($_POST['submit'])){
    header('Refresh: 1; beheer.php');
} else {
    break;
}

if (isset($_POST['submit'])) { 
    $password = md5($_POST['wachtwoord']);
// $check_q = mysqli_query($conn, "SELECT * FROM login WHERE naam='".addslashes($_POST['naam'])."' AND wachtwoord='".$password."' AND admin") or die (mysqli_error($conn)); 

$sql = "SELECT naam='".addslashes($_POST['naam'])."', wachtwoord='".$password."', admin FROM login";
$result = $conn->query($sql);

if ($result->num_rows == 0) { 
$alert = 1;
} else {
while ($beheer = mysqli_fetch_object($result)) {
$_SESSION['admin']['login_id'] = $beheer->login_id; 
$_SESSION['admin']['naam'] = $beheer->naam;
$_SESSION['admin']['admin'] = $beheer->admin;
}

$_SESSION['admin']['naam'] = $_POST['naam']; 
$_SESSION['admin']['wachtwoord'] = $_POST['wachtwoord'];  
$_SESSION['admin']['admin'] = $beheer->admin;  
    
Header("Location: login.php");   

exit;
}
} 
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

<div class="container text-center">
    <h1> Inloggen voor beheer </h1><br><br>
</div>

<!-- <div class="row">
    <div class="col-sm-8 col-md-6 col-md-offset-4 text-center">
        <h1 class="login-title">Login voor beheer</h1>
    </div>
</div> -->
<div class="container d-flex justify-content-center">
<div class="col-sm-6">
<div class="card-body p-md-5">
    
<form method="POST">
<div class="container">
<div class="row">
<div class="col form-outline mb-4">
    <label for="userlogin">Voor hier uw gebruikersnaam in</label><br>
    <input type="text" name="naam" class="form-control" placeholder="Naam" style="width:530px;" required>
</div>

<div class="col form-outline mb-4">
    <label for="adres">Voor hier uw wachtwoord in</label><br>
    <input type="password" name="wachtwoord" class="form-control" placeholder="Wachtwoord" style="width:530px;" required>
</div>

    <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
    </div>
    </div>
</form>

<br><hr style="width:550px;" size="3" color="black"></hr>
    <div class="d-grid gap-2">
        <label for="password"> Heeft u nog geen account? </label>
        <a class="btn btn-outline-dark" href="createaccount.php" role="button"> Maak hier een account aan: </a>
    </div>
    
</body>
</html>