<?php
include 'dbconnection.php';
// if (isset($_POST['usernaam'])) { 
// $username = $_POST['usernaam'];
// $password = $_POST['wachtwoord'];
// $query = "SELECT * FROM login WHERE usernaam='$username' AND wachtwoord='$password' AND admin";
// $result = $conn->query($query);

// if(mysqli_num_rows($result) == 1){
//     $_SESSION["usernaam"] = $username;
//     $_SESSION["wachtwoord"] = $password;

//     header('location: beheer.php');
//     exit;
// } else {

// }}

if (isset($_POST['usernaam'])) { 
    $username = $_POST['usernaam'];
    $password = $_POST['wachtwoord'];
    $hex_password = bin2hex($password);
    echo $hex_password;
    
    $query = "SELECT * FROM login WHERE usernaam=? AND wachtwoord=UNHEX(?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $hex_password);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($row = $result->fetch_assoc()) {
        if ($row['admin'] == 1) {
            $_SESSION["usernaam"] = $username;
            $_SESSION["wachtwoord"] = $password;
            header('location: beheer.php');
            exit;
        } else {
            ?>
            <div class="alert alert-danger position-absolute top-0 start-50 translate-middle-x" style="width:600px" role="alert">
                U heeft geen beheerdersrechten - Probeer het opnieuw!
            </div><br><br>
            <?php
        }
    } else {
        ?>
        <div class="alert alert-danger position-absolute top-0 start-50 translate-middle-x" style="width:600px" role="alert">
            Onjuiste gebruikersnaam en/of wachtwoord - Probeer het opnieuw!
        </div><br><br>
        <?php
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

<section class="vh-100">
<div class="container py-5">
    <div class="row d-flex justify-content-center align-tiems-center h-100">
        <div class="col col-xl-10">
            <div class="shadow-lg p-3 mb-5 bg-body rounded" style="border-radius:1rem;">

                <div class="card-body p-4 p-lg-5 text-black">
                    <form class="form" method="POST">
                    <h3 class="fw-normal mb-3 pb-3"> Inloggen voor beheer </h3>

                    <div class="form-outline mb-4">
                    <input type="text" name="usernaam" class="form-control form-control-lg" placeholder="Naam" required>
                    <label class="form-label" for="userlogin"> Voer hier uw gebruikersnaam in </label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="wachtwoord" class="form-control form-control-lg" placeholder="Wachtwoord" required>
                    <label class="form-label" for="adres"> Voer hier uw wachtwoord in </label>
                    </div>

                    <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn btn-block" type="submit">Login</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>