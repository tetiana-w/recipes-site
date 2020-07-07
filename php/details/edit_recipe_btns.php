<?php
if (isset($_SESSION["eingeloggt"])) {
    echo "<a href='?link=updaterecipe&rezeptnum=$rezept_num' class='btn btn-green'>Ä
    </a>
    <a href='?link=del&rezeptnum=$rezept_num' class='btn btn-green'>L
    </a>";
}
?>