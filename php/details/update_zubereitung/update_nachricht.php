<div class="nachricht">
<?php
if ($datenbank->affected_rows == 1 && $datenbank->warning_count == 0) {
    echo "<p>Geschpeichert</p>";
} else if ($datenbank->warning_count >= 1) {
    echo "<p>Mit warnung Geschpeichert</p>";
} else if ($datenbank->error == "") {
    echo "<p>Es gab keine änderungen</p>";
}

?>
</div>