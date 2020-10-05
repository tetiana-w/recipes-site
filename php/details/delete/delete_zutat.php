<div class="container">
    <h2>Zutat löschen</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    $rezept_num = $_GET["rezeptnum"];
    $rz_num = $_GET["rznum"];

    $zutat_db = mysqli_query(
        $datenbank,
        "select z.zutaten from rezepte_zutaten as rz
            left join zutaten as z on z.zutaten_num = rz.zutaten_num_fk
            where rz_num =  $rz_num"
    );
    $zutat = mysqli_fetch_array($zutat_db)["zutaten"];
    $object = $zutat;

    if (!isset($_POST["del"])) {
        include("delete_form.php");
    } else {
        // 1. Zutat löschen        
        mysqli_query(
            $datenbank,
            "delete from rezepte_zutaten where rezept_num_fk = $rezept_num 
                    and rz_num = $rz_num"
        );
        include("delete_nachricht.php");
    }
    mysqli_close($datenbank);
    ?>

</div>