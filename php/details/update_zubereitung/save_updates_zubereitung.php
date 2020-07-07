<?php
if (isset($_POST["update_zubereitung"])) {

    $schritt = $_POST["schritt"];
    $zubereitung =  $_POST["zubereitung"]; 

     mysqli_query(
        $datenbank,
        "update zubereitung set
        schritt_num = $schritt,
        zubereitung =  '$zubereitung'
        where z_num = $z_num"
    ); 
    echo $datenbank->error;
}
?>