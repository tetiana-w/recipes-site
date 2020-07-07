<div class="container recepies">
    <h2>Zubereitung ändern</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    $z_num = $_GET["znum"];
    $rezept_num = $_GET["rezeptnum"];

    $query_zubereitung = mysqli_query(
        $datenbank,
        "select * from zubereitung where z_num = $z_num"
    );
    $zubereitung_db = mysqli_fetch_array($query_zubereitung);   
    $zubereitung = $zubereitung_db["zubereitung"];
    $schritt_num = $zubereitung_db["schritt_num"];
    $rezept_num_fk = $zubereitung_db["rezept_num_fk"];
   
        
    if (isset($_POST["update_zubereitung"])) {
        include("save_updates_zubereitung.php"); 
        include("update_nachricht.php");   
    } else {         
        include("update_zubereitung_form.php");
    }
    
    echo "<a href='?link=all&rezeptnum=$rezept_num' class='btn btn-green'>Zurück</a>";
    mysqli_close($datenbank);
    ?>
</div>