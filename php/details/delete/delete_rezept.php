<div class="container">
    <h2>Rezept löschen</h2>

    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    $rezept_num = $_GET["rezeptnum"];

    $query_rezept = mysqli_query(
        $datenbank,
        "select rezept_titel, haupt_bild from rezepte where rezept_num = $rezept_num limit 1"
    );

    while ($rezept_db = mysqli_fetch_array($query_rezept)) {
        $hauptbild = $rezept_db["haupt_bild"];
        $titel =  $rezept_db["rezept_titel"];

        if (!isset($_POST["del_rezept"])) {
            echo "<p>$titel</p>";
    ?>
            <p>Wirklich löschen?</p>
            <form method="post">
                <div class="btn-form">
                    <input class='btn btn-green' type='submit' value='Ja' name='del_rezept'>
                    <a href='?link=all&rezeptnum=<?php echo $_GET["rezeptnum"]; ?>' class='btn btn-green'>Nein</a>
                </div>
            </form>
    <?php
        }
        if (isset($_POST["del_rezept"])) {

            // 1. Zutaten löschen        
            mysqli_query(
                $datenbank,
                "delete from rezepte_zutaten where rezept_num_fk = $rezept_num"
            );

            // 2. Zubereitung löschen
            mysqli_query(
                $datenbank,
                "delete from zubereitung where rezept_num_fk = $rezept_num"
            );

            // 3. Bild loeschen
            if (file_exists("uploaded/$hauptbild")) {
                unlink("uploaded/$hauptbild");
            }

            // 4. Rezept löschen
            mysqli_query(
                $datenbank,
                "delete from rezepte where rezept_num = $rezept_num"
            );
            $object = $titel;
            // Link rezeptnum löschen
            unset($_GET["rezeptnum"]);
            include("delete_nachricht.php");
        }
    }
    mysqli_close($datenbank);
    ?>
</div>