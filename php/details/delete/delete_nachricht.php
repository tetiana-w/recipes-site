<?php
if ($datenbank->affected_rows == 1 && $datenbank->warning_count == 0) {
    echo "<p>".$object."</p>
         <p>Wurde gelöscht</p>";
} else if ($datenbank->error == "") {
    echo "<p>Es gab ein Fehler</p>";
}
$rezept_num = (isset($_GET["rezeptnum"])) ? "&rezeptnum=".$_GET["rezeptnum"] : "";
?>
<a href='?link=all<?php echo $rezept_num ?>' class='btn btn-green'>Weiter</a>