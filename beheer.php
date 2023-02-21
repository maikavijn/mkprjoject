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
      <p class="text-center" style="font-size: 25pt; margin-top: 10px;">Welkom terug <?php echo $_SESSION['usernaam'];?></p> 
    </div>
  </div>

  <hr style="width: 100%" size="3" color="white"></hr>
  <div class="d-grid gap-2">
    <a class="btn btn-danger" href="beheer.php" role="button"> Ga terug </a>
  </div>
  
</body>
</html>