<div class="message">
<?php
if ($datenbank->affected_rows == 1 && $datenbank->warning_count == 0) {
    echo "<p>Geschpeichert</p>";
} else if ($datenbank->warning_count >= 1) {
    echo "<p>Mit warnung Geschpeichert</p>";
} else if ($datenbank->error == "") {
    echo "<p>Es gab keine änderungen</p>";
}
echo "<a href='?link=all&rezeptnum=$rezept_num' class='btn btn-green'>Weiter</a>";
?>
</div>