<?php
switch ($_GET["link"]) {
	case  "login":
		include("login/login_greets.php");
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
		include("new_recipe.php");
		break;
	case "all":
		include("recipe.php");
		break;
	case  "del":
		include("details/delete/delete_rezept.php");
		break;
	case  "delzutat":
		include("details/delete/delete_zutat.php");
		break;
	case  "delzubereitung":
		include("details/delete/delete_zubereitung.php");
		break;
	case  "updaterecipe":
		include("details/update_recipe/update_recipe.php");
		break;
	case  "zubereitungsform":
		include("details/form_zubereitung/form_zubereitung.php");
		break;
	case  "updatezubereitung":
		include("details/update_zubereitung/update_zubereitung.php");
		break;
	case  "zutatenform":
		include("details/form_zutaten/form_zutaten.php");
		break;
	case  "updatezutat":
		include("details/update_zutaten/update_zutaten.php");
		break;
	default:
		include("no_page.php");
		break;
}
