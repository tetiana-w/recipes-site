<?php
if (isset($_SESSION["eingeloggt"])) {
    echo "<a href='?link=zutatenform&rezeptnum=$rezept_num'
         class='btn btn-green' name='zutaten_hinzufuegen'>+
         </a> 
";
}

?>