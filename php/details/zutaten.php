<?php

$query_zutaten = mysqli_query(
    $datenbank,
    "select rz.zutaten_menge, rz.rz_num, z.zutaten, m.masseneinheit 
        from rezepte_zutaten as rz
        left join masseneinheit as m 
        on m.masseneinheit_num=rz.masseneinheit_num_fk
        left join zutaten as z on z.zutaten_num=rz.zutaten_num_fk
        where rz.rezept_num_fk=" . $_GET["rezeptnum"]
);

?>

<div class='zutaten-box'>
    <ul>
        <?php
        while ($zutatendaten = mysqli_fetch_array($query_zutaten)) {
            $zutaten = $zutatendaten["zutaten"];
            $zutaten_menge = $zutatendaten["zutaten_menge"];
            $masseneinheit = $zutatendaten["masseneinheit"];
            $rz_num = $zutatendaten["rz_num"];
            $rezept_num = $_GET["rezeptnum"];
            
            $zutaten_menge = ($zutaten_menge > 0) ? $zutaten_menge : "";
            echo "<li>
            <div>$zutaten - $zutaten_menge $masseneinheit</div>";
            if (isset($_SESSION["eingeloggt"])) {
                echo "
                <a href='?link=updatezutat&rezeptnum=$rezept_num&rznum=$rz_num' class='btn btn-green'>Ä</a>
                <a href='?link=delzutat&rezeptnum=$rezept_num&rznum=$rz_num' class='btn btn-green'>L</a>
                ";
            }
            echo "</li>";
        }
        ?>

    </ul>
</div>