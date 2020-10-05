<?php
$datenbank = mysqli_connect("localhost", "root", "", "rezepte");
mysqli_query($datenbank, "set names utf8");
echo $datenbank->error;
?>
<div class="container">
    <h2>Zutaten hinzufügen</h2>
    <form method="post" class="zutaten-form">
        <div class="zutaten-input">
            <label>Zutat</label>
            <select type="text" name="zutaten">
                <?php include("form_zutaten_zutat.php") ?>
            </select>
        </div>
        <div class="zutaten-input">
            <label>Menge</label>
            <input type="number" value="0" name="menge">
        </div>
        <div class="zutaten-input">
            <label>Maßeinheit</label>
            <select type="text" name="masseinheit">
                <?php include("form_zutaten_masseneinheit.php") ?>
            </select>
        </div>
        <div class="zutaten-input">
            <input class='btn btn-green' type='submit' value='+' name='zutaten_speichern'>
        </div>
    </form>

    <?php
    include("zutaten_speichern.php");
    include("zutaten_gespeichert.php");

    $rezept_num = $_GET["rezeptnum"];
    echo "<a href='?link=all&rezeptnum=$rezept_num' class='btn btn-green' >Weiter</a>";
    mysqli_close($datenbank);
    ?>

</div>