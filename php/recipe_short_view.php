<?php
    if (isset($_GET["gaengemenue"])) {
        $gaengemenue = $_GET["gaengemenue"];
        $queryRezepte = "select * from rezepte 
                where gaengemenue_num_fk = $gaengemenue";
    } else {
        $queryRezepte = "select * from rezepte";
    }
    $query = mysqli_query(
        $datenbank,
        $queryRezepte
    ); 

?>