<?php
if (isset($_SESSION["eingeloggt"])) {
    echo "<a href='?link=zubereitungsform&rezeptnum=$rezept_num' 
            class='btn btn-green' name='add_zubereitungschritt'>+
            </a>";
}
?>