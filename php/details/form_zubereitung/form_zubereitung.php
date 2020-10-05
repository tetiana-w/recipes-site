<?php
$datenbank = mysqli_connect("localhost", "root", "", "rezepte");
mysqli_query($datenbank, "set names utf8");
echo $datenbank->error;
?>

<div class="container">
    <h2>Zubereitungsschritt hinzufügen</h2>
    <form method="post">
        <div class="zubereitung-input">
            <label>Schritt</label>
            <input type="number" min="1" name="schritt" />
            <label>Zubereitung</label>
            <textarea rows="6" name="zubereitung"></textarea>
        </div>
        <div class="zubereitung-input">
            <input class='btn btn-green' type='submit' value='+' name='zubereitung_speichern'>
        </div>
    </form>

    <?php
    include("zubereitung_speichern.php");
    include("zubereitung_gespeichert.php");
    $rezept_num = $_GET["rezeptnum"];
    echo "<a href='?link=all&rezeptnum=$rezept_num' class='btn btn-green' >Weiter</a>";
    mysqli_close($datenbank);
    ?>

</div>