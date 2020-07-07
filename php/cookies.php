<?php
if (isset($_POST["cookies"]) || isset($_COOKIE["website_cookie"])) {
    /* 	echo "Cookies werden aktiviert";
	setcookie("website_cookie","aktiviert", time() + 60 * 60 * 24 * 365 * 4); */
} else {
    echo "<div class='cookie'>
    Diese Seite verwendet Cookies. Dürfen wir Cookies aktivieren?
    <form method='post'>
        <input class='btn btn-green' style='background-color: #4CAF50;color:antiquewhite;'
         type='submit' name='cookies' value='OK'>
    </form>
</div>";
}
?>

