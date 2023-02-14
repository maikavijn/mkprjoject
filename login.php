<!-- <?php 
// session_start();
// include 'dbconnection.php';
// if (isset($_POST['submit'])) { 
//     $password = md5($_POST['wachtwoord']);
// $check_q = mysqli_query($conn, "SELECT * FROM login WHERE naam='".addslashes($_POST['naam'])."' AND wachtwoord='".$password."' AND admin = 1") or die (mysqli_error($conn)); 
// if (mysqli_num_rows($check_q) == 0) { 
// $alert = 1;
// } else {
// while ($beheer = mysqli_fetch_object($check_q)) {
// $_SESSION['admin']['login_id'] = $beheer->login_id; 
// $_SESSION['admin']['naam'] = $beheer->naam;
// $_SESSION['admin']['email'] = $beheer->email;
// }

// $_SESSION['admin']['naam'] = $_POST['naam']; 
// $_SESSION['admin']['wachtwoord'] = $_POST['wachtwoord']; 
  
// Header("Location: index.php");
// exit;
// }} 
// ?>
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
    <title>Log in</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-md-offset-4">
                <h1 class="text-center login-title">Login voor beheer</h1>
                <div class="account-wall">
                    <form class="form-signin" method="POST">
                        <input type="text" name="naam" class="form-control" placeholder="Gebruikersnaam" required
                            autofocus>
                        <input type="password" name="wachtwoord" class="form-control" placeholder="Wachtwoord" required>
                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                            Login</button>
                        <label class="checkbox pull-left">
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html> -->