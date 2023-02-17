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
    <?php include("uitloggen.php"); ?>
    <title>MK Project</title>
</head>

<body>
    <!-- Navigation -->
    <div class="header hidden-print">
        <style>
        .img-responsive {
            width: 80px;
        }

        .logo {
            display: flex;
            justify-content: flex-start;
            margin-top: 4px;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .row {
            display: flex;
        }

        nav .col-sm-3 {
            display: flex;
            justify-content: left;
        }

        nav {
            padding-top: 5px;
        }
        </style>
        <nav class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="beheer.php" class="btn btn-danger">Beheer</a>
                </div>
                <ul class="col-sm-9">
                    <li><a href="overzichtpers.php" class="btn btn-primary">Overzicht Personen</a></li>
                    <li><a href="oversichtnotitie.php" class="btn btn-primary">Overzicht Notitie</a></li>
                    <form class="d-flex" method="POST" action=""><input type="submit" name="loguit" class="btn btn-secondary" value="Loguit">
                </ul>
            </div>
        </nav>
    </div>

</body>