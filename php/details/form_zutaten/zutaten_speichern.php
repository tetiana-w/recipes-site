<?php
if (isset($_POST["zutaten_speichern"])) {
    $zutaten_num = $_POST["zutaten"];
    $menge = $_POST["menge"];
    $masseneinheit =  $_POST["masseinheit"];
    $rezept_num = $_GET["rezeptnum"];

    $menge_attritut = (isset($_POST["menge"])) ? "zutaten_menge," : "";
    $menge = (isset($_POST["menge"])) ? $menge."," : "";

    mysqli_query(
        $datenbank,
        "insert into rezepte_zutaten
    (
        zutaten_num_fk,
        $menge_attritut
        masseneinheit_num_fk,
        rezept_num_fk
    ) values (
        $zutaten_num,
        $menge
        $masseneinheit,
        $rezept_num 
    )"
    );  
    echo $datenbank->error;   
}
?>
