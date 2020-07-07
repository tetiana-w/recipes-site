<?php

$query_zubereitung = mysqli_query(
    $datenbank,
    "select * from zubereitung
        where rezept_num_fk=" . $_GET["rezeptnum"] . "
        order by schritt_num"
);

?>

<div class='zutaten-box ordered'>   
    <ul>
        <ol type="1">

        <?php
        while ($zubereitungdaten = mysqli_fetch_array($query_zubereitung)) {
             $zubereitung = $zubereitungdaten["zubereitung"]; 
            $z_num = $zubereitungdaten["z_num"];
            $rezept_num = $_GET["rezeptnum"];

            echo "<li>
            <div>$zubereitung</div>";
            if (isset($_SESSION["eingeloggt"])) {
                echo "
                <a href='?link=updatezubereitung&rezeptnum=$rezept_num&znum=$z_num' class='btn btn-green'>Ä</a>
                <a href='?link=delzubereitung&rezeptnum=$rezept_num&znum=$z_num' class='btn btn-green'>L</a>
                ";
            }
            echo "</li>";
        }
        ?>
        </ol>
    </ul>
</div>