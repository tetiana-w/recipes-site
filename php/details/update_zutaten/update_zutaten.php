<div class="container recepies">
    <h2>Zutat ändern</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    $rz_num = $_GET["rznum"];
    $rezept_num = $_GET["rezeptnum"];

    $query_zutat = mysqli_query(
        $datenbank,
        "select * from rezepte_zutaten where rz_num = $rz_num"
    );
    $zutaten_db = mysqli_fetch_array($query_zutat);
    $zutaten_num_fk = $zutaten_db["zutaten_num_fk"];
    $zutaten_menge = $zutaten_db["zutaten_menge"];
    $masseneinheit_num_fk = $zutaten_db["masseneinheit_num_fk"];
        
    if (isset($_POST["update_zutaten"])) {
        include("save_updates_zutaten.php"); 
        include("update_nachricht.php");   
    } else {
        include("update_zutaten_form.php");
    }
    
    echo "<a href='?link=all&rezeptnum=$rezept_num' class='btn btn-green'>Zurück</a>";
    mysqli_close($datenbank);
    ?>
</div>