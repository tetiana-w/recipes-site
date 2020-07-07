<div class="container recepies">
    <h2>Zutat löschen</h2>
    <div class="loeschen-box">
        <?php
        $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
        mysqli_query($datenbank, "set names utf8");
        echo $datenbank->error;

        $rezept_num = $_GET["rezeptnum"];
        $z_num = $_GET["znum"];

        $zubereitung_db = mysqli_query(
            $datenbank,
            "select zubereitung from zubereitung           
            where z_num =  $z_num"
        );
        $zubereitung = mysqli_fetch_array($zubereitung_db)["zubereitung"];
        $object = $zubereitung;

        if (!isset($_POST["del"])) {
            include("delete_form.php");
        } else {
            // 1. Zubereitung löschen        
            mysqli_query(
                $datenbank,
                "delete from zubereitung where rezept_num_fk = $rezept_num 
                    and z_num = $z_num"
            );
            include("delete_nachricht.php");
        }
        mysqli_close($datenbank);
        ?>
    </div>
</div>