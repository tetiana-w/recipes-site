<div class="container recepies">
    <h2>Neues Rezept hinzufügen</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");   

    if (isset($_POST["rezept_speichern"])) {
        include("new_recipe_save_data_db.php");
        include("new_recipe_saved_message.php");;
    } else  {
        include("form_recipe/form_recipe.php");
    }
    mysqli_close($datenbank);
    ?>
</div>