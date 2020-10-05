<div class="container">
    <?php
    if (!isset($_SESSION["eingeloggt"])) {
        include("login_form.php");
    } else {
        include("login_greets.php");
    }
    if (isset($loginfehler)) {
        echo $loginfehler;
    }
    ?>
</div>