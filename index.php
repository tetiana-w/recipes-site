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
    <?php // include("php/cookies.php") 
    ?>
    <div class="background-img">
        <div class="img-container">
        </div>
    </div>
    <?php
    if (isset($_SESSION["eingeloggt"])) {
        include("php/navigation_logged_in.php");
    } else {
        include("php/navigation.php");
    }
    ?>
    <footer>
        <div class="footer-container">
            <div>
                <a href="?link=Impressum">Impressum</a><br /><br />
                <a href="?link=Datenschutz">Datenschutz</a>
            </div>
            <p>Guten Appetit!</p>
            <div>Author: Tetiana Wycital<br /><br />
                Bilder: <a href="https://pixabay.com/de/service/license/">Pixabay</a>
            </div>
        </div>
    </footer>
</body>

</html>