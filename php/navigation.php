<?php
switch ($_GET["link"]) {
    case  "reg":
        include("registrieren/registrieren.php");
        break;
    case  "login":
        include("login/login.php");
        break;
     case "logout":
        unset($_SESSION["eingeloggt"]);
        include("login/logout_page.php");
        break; 
    case  "":
        echo include("home.php");
        break;
    case  "home":
        echo include("home.php");
        break;
    case "add":
        include("login/not_logged_in.php");
        break;
    case "all":
        include("recipe.php");
        break;
    default:
        include("no_page.php");
        break;
}
