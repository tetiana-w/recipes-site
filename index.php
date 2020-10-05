<?php
session_start();
include("php/login/check_login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezepte</title>
    <link rel="icon" href="img/himbeere_icon.jpg" sizes="32x32" type="image/jpg">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header>
        <div class="site-header">
            <?php
            include("php/header_menu.php");
            ?>
        </div>
    </header>
    <main>
        <div class="bg-image"></div>
        <?php // include("php/cookies.php") 
        ?>
       
        <?php
        if (isset($_SESSION["eingeloggt"])) {
            include("php/navigation_logged_in.php");
        } else {
            include("php/navigation.php");
        }
        ?>
    </main>

    <footer id="main-footer" class="grid-col-2">
        <div>Bilder von <a href="https://pixabay.com/de/service/license/" target="_blank">Pixabay</a></div>
        <div>Projekt von <a href="http://github.com/tetiana-w" target="_blank">TW</a></div>
    </footer>
   
</body>

</html>