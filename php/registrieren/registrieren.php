<div class="container">
    <h2>Registrieren</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    include("registrieren_form.php");
    include("save_new_user.php");

    mysqli_close($datenbank);
    ?>
</div>