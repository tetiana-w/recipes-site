<?php
if (isset($_POST["rezept_speichern"])) {
    $rezept_titel = $_POST["titel"];
    $beschreibung_kurz = $_POST["beschreibung"];
    $kategorie = $_POST["kategorie"];
    $schwierigkeitstufe = $_POST["schwierigkeitstufe"];
    $vorbereitungszeit = $_POST["vorbereitungszeit"];
    $kochzeit = $_POST["kochzeit"];
    $portionen = $_POST["portionen"];
    $zubereitungsart = $_POST["zubereitungsart"];
    $gaengemenue = $_POST["gaengemenue"];
    $bildname = "default.jpg"; 
    
    if (isset($_FILES["hauptbild"])) {
        $quelle = $_FILES["hauptbild"]["tmp_name"];
        if ($_FILES["hauptbild"]["type"] == "image/jpeg") {
            $bildname = uniqid("haupt_") . ".jpg";
            move_uploaded_file($quelle, "uploaded/".$bildname);
        }
    }

    mysqli_query(
        $datenbank,
        "insert into rezepte
        (
            rezept_titel,
            beschreibung_kurz,
            kategorie_num_fk,
            schwierigkeit_num_fk,
            vorbereitungszeit,
            kochzeit,
            portionen,
            zubereitungsart_num_fk,
            gaengemenue_num_fk,
            haupt_bild
        ) values
        (
            '$rezept_titel',
            '$beschreibung_kurz',                
             $kategorie,
             $schwierigkeitstufe,
             $vorbereitungszeit,
             $kochzeit,
             $portionen,
             $zubereitungsart,
             $gaengemenue,
             '$bildname'
        )"
    );
    echo $datenbank->error;    
}
?>