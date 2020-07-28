<?php
session_start();
?>
<!DOCTYPE html>

<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Přihlašovací stránka - Demo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Přihlašovací stránka - Demo</title>
</head>

<body>
    <header>
        <nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid d-flex">
                <div class="d-flex justify-content-start" style="width:50%">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://tomas-novakdev.eu/">Zpět na portfolio</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-end" style="width:50%">
                    <?php
                    if (isset($_SESSION['userId'])) {
                        echo ('<p class="m-4">Uživatel:' . $_SESSION['userUid'] . '</p>
                    <form action="includes/signout.inc.php" method="post">
                    <button type="submit" class="btn btn-dark mt-3" name="logout-submit">Odhlásit se</button>
                </form>');
                    } else {
                        echo '<p class="m-4">Uživatel: Nepřihlášen</p>';
                    }
                    ?>
                </div>
            </div>
        </nav>

        <!-- if (isset($_SESSION['userId'])) {
    echo "<p>Jste přihlášen</p>";
  } else {
    echo "<p>Jste odhlášen</p>";
  }
  ?> -->

    </header>