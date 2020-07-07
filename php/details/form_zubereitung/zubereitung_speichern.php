<?php
if (isset($_POST["zubereitung_speichern"])) {

   $schritt =  $_POST["schritt"];
    $zubereitung =  $_POST["zubereitung"];
    $rezept_num = $_GET["rezeptnum"];
   
/* TODO DELETE
     if (isset($_FILES["hauptbild"])) {
        $quelle = $_FILES["hauptbild"]["tmp_name"];
        if ($_FILES["hauptbild"]["type"] == "image/jpeg") {
            $bildname = uniqid("haupt_") . ".jpg";
            move_uploaded_file($quelle, "uploaded/".$bildname);
        }
    } 
     if (isset($_FILES["zubereitungsbild"])) {
        $quelle = $_FILES["zubereitungsbild"]["tmp_name"];
        if ($_FILES["zubereitungsbild"]["type"] == "image/jpeg") {
            $bildname = uniqid("schritt_$schritt") . ".jpg";
            move_uploaded_file($quelle, "uploaded/".$bildname);
        }
    } 
 */
 

    mysqli_query(
        $datenbank,
        "insert into zubereitung
    (       
        schritt_num,
        zubereitung,        
        rezept_num_fk
    ) values ( 
        $schritt, 
        '$zubereitung',            
        $rezept_num 
    )"
    ); 
    echo $datenbank->error;
}
?>
