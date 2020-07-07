<div class="container recepies">
    <h2>Rezept ändern</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    $rezept_num = $_GET["rezeptnum"];
    $query_rezepte = mysqli_query(
        $datenbank,
        "select * from rezepte where rezept_num = $rezept_num"
    );
    $rezepte_db = mysqli_fetch_array($query_rezepte);

    $rezepttitel = $rezepte_db["rezept_titel"];
    $beschreibung = $rezepte_db["beschreibung_kurz"];
    $vorbereitungszeit = $rezepte_db["vorbereitungszeit"];
    $kochzeit = $rezepte_db["kochzeit"];
    $hauptbild = $rezepte_db["haupt_bild"];
    $portionen = $rezepte_db["portionen"];
    $gaengemenue = $rezepte_db["gaengemenue_num_fk"];
    $zubereitungsart = $rezepte_db["zubereitungsart_num_fk"];
    $schwierigkeitstufe = $rezepte_db["schwierigkeit_num_fk"];
    $kategorie = $rezepte_db["kategorie_num_fk"];

    if (!isset($_POST["rezept_update"])) {        
        include("update_recipe_form.php");
    } else {
        include("save_updates_recipe.php");
        include("update_nachricht.php");
    }
    mysqli_close($datenbank);
    ?>

</div>