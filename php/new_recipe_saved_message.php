<div class='nachricht'>
    <?php
    $rezept_num = $datenbank->insert_id;
    if ($datenbank->affected_rows == 1 && $datenbank->warning_count == 0) {
        echo "<p>Neues Rezept wurde geschpeichert. ID: $rezept_num </p>";
        echo "<a href='?link=all&rezeptnum=$rezept_num' class='btn btn-green'>Weiter</a>";
    } else if ($datenbank->error == "") {
        echo "<p>Es gab ein Fehler</p>";
        echo "<a href='?link=add' class='btn btn-green'>Zurück</a>";
    }
    ?>
</div>