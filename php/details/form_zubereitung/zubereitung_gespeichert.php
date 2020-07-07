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
                echo "<li>$zubereitung</li>";
            }
            ?>
        </ol>
    </ul>
</div>