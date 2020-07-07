<div class="container recepies">
    <?php
    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");
    echo $datenbank->error;

    if (isset($_POST["suche"])) {
        $_SESSION["suche"] = $_POST["suche"];
    }
    if (isset($_SESSION["suche"])  && $_SESSION["suche"] != "") {
        $_POST["suche"] = $_SESSION["suche"];
    }
    if (isset($_GET["gaengemenue"])) {
        $_SESSION["gaengemenue"] = $_GET["gaengemenue"];
    }
    if (isset($_SESSION["gaengemenue"])) {
        $_GET["gaengemenue"] = $_SESSION["gaengemenue"];
    }
    if (isset($_SESSION["gaengemenue"])  && $_SESSION["gaengemenue"] > 0) {
        $_GET["gaengemenue"] = $_SESSION["gaengemenue"];
    }
    if (isset($_GET["gaengemenue"]) && $_GET["gaengemenue"] == 0) {
        unset($_GET["gaengemenue"]);
    }
    ?>
    <div>
        <ul class="recipe-buttons">
            <?php include("recipe_menue.php"); ?>
        </ul>
    </div>
    <?php
    if (isset($_GET["rezeptnum"])) {
        include("details/recipe_details.php");
    } else {

    ?>
        <form action="?link=all" method="post">
            <div class="suche">
                <input type="text" placeholder="Suche" name="suche" value="<?php echo @$_POST["suche"]; ?>" />
                <input type="submit" class="btn btn-green" value="Suchen" />
            </div>
        </form>
    <?php

        $query = "select r.*, s.schwierigkeitstufe 
            from rezepte as r left join schwierigkeitstufen as s
            on s.schwierigkeit_num = r.schwierigkeit_num_fk           
            ";
        $additional_info = array();
        if (isset($_POST["suche"])) {
            // LIKE = ähnlich // % beliebige zeichen 
            $additional_info[] = "(rezept_titel LIKE '%" . $_POST["suche"] . "%' 
				OR beschreibung_kurz LIKE '%" . $_POST["suche"] . "%')";
        }
        if (isset($_GET["gaengemenue"])) {
            $additional_info[] = "gaengemenue_num_fk = " . $_GET["gaengemenue"];
        }

        if (count($additional_info) > 0) {
            $extension = implode(" and ", $additional_info);
            $query .= " where " . $extension;
        }
        $rezept_query = mysqli_query($datenbank, $query);
        

        echo "<div class='food-container'>";
        while ($rezeptdaten = mysqli_fetch_array($rezept_query)) {
            $rezeptnum = $rezeptdaten["rezept_num"];
            $rezepttitel = $rezeptdaten["rezept_titel"];
            $hauptbild = $rezeptdaten["haupt_bild"];
            $beschreibung = $rezeptdaten["beschreibung_kurz"];
            $kochzeit = $rezeptdaten["kochzeit"];
            $schwierigkeitstufe = $rezeptdaten["schwierigkeitstufe"];

            echo   "<div class='food-item'>            
            <img src='uploaded/$hauptbild'>
            <div class='recipe-title'>$rezepttitel</div>
            <div class='text-content'>               
                <p>wie: $schwierigkeitstufe
                kochzeit: $kochzeit min</p> 
                <p> $beschreibung </p>
                <a href='?link=" . $_GET["link"] . "&rezeptnum=$rezeptnum' class='btn btn-red'>
                    Lesen
                </a>
                <a class='btn btn-red'>
                    Merken
                </a>
            </div>
        </div>";
        }
        echo "</div>";
        //include("recipe_short_view.php");
    }
    mysqli_close($datenbank);
    ?>
</div>