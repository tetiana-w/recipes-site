<?php
if (isset($_POST["rezept_update"])) {
    $rezept_titel = $_POST["titel_update"];
    $beschreibung_kurz = $_POST["beschreibung_update"];
    $kategorie = $_POST["kategorie_update"];
    $schwierigkeitstufe = $_POST["schwierigkeit_update"];
    $vorbereitungszeit = $_POST["vorbereitungszeit_update"];
    $kochzeit = $_POST["kochzeit_update"];
    $portionen = $_POST["portionen_update"];
    $zubereitungsart = $_POST["zubereitungsart_update"];
    $gaengemenue = $_POST["gaengemenue_update"];

    $rezept_num = $_GET["rezeptnum"];

    if (isset($_FILES["hauptbild"])) {

        // Neues Bild
        $quelle = $_FILES["hauptbild"]["tmp_name"];
        if ($_FILES["hauptbild"]["type"] == "image/jpeg") {
            // Bild loeschen
            if (file_exists("uploaded/$hauptbild")) {
                unlink("uploaded/$hauptbild");
            }
            $bildname = uniqid("haupt_") . ".jpg";
            move_uploaded_file($quelle, "uploaded/" . $bildname);
        } else {
            $bildname = $hauptbild;
        }
    }

    // Query
    $bild = ", haupt_bild = '$bildname'";

    $query =  "update rezepte set
    rezept_titel = '$rezept_titel',
    beschreibung_kurz = '$beschreibung_kurz',
    kategorie_num_fk = $kategorie,
    schwierigkeit_num_fk = $schwierigkeitstufe,
    vorbereitungszeit = $vorbereitungszeit,
    kochzeit = $kochzeit,
    portionen = $portionen,
    zubereitungsart_num_fk = $zubereitungsart,
    gaengemenue_num_fk = $gaengemenue" .
        $bild . "
    where rezept_num = $rezept_num";

    mysqli_query(
        $datenbank,
        $query
    );
    echo $datenbank->error;
}
