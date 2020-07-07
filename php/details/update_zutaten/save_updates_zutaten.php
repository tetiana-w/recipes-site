<?php
if (isset($_POST["update_zutaten"])) {

    $zutaten_num = $_POST["zutaten_update"];
    $menge =  $_POST["menge_update"];
    $masseneinheit =  $_POST["masseinheit_update"];

    mysqli_query(
        $datenbank,
        "update rezepte_zutaten set
        zutaten_num_fk = $zutaten_num,
        zutaten_menge =  $menge,
        masseneinheit_num_fk  = $masseneinheit 
        where rz_num = $rz_num"
    );
    echo $datenbank->error;
}
?>
