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
    <?php include('uitloggen.php'); ?>
    <title>MK Project</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="beheer.php">Beheer</a>
        <a class="nav-item nav-link" href="overzichtpers.php">Overzicht personen</a>
        <a class="nav-item nav-link" href="oversichtnotitie.php">Overzicht notitie</a>
    </div>
  </div>
  <div class="navbar-nav ms-auto">
        <form class="d-flex" method="POST" action="uitloggen.php">
        <input type="submit" name="loguit" class="btn btn-outline-danger" value="Loguit">
      </form>
</div>
</nav>

</body>