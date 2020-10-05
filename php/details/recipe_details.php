<?php

$queryDetails = mysqli_query(
    $datenbank,
    "select r.*, g.gaengemenue, za.zubereitungsart,
    s.schwierigkeitstufe, k.kategorie_name
    from rezepte as r
    left join gaengemenue as g 
    on g.gaengemenue_num = r.gaengemenue_num_fk
    left join zubereitungsart as za 
    on za.zubereitungsart_num = r.zubereitungsart_num_fk
    left join schwierigkeitstufen as s
    on s.schwierigkeit_num = r.schwierigkeit_num_fk
    left join kategorien as k
    on k.kategorie_num = r.kategorie_num_fk
    where rezept_num = " . $_GET["rezeptnum"] . "
    limit 1"
);

while ($rezeptdaten = mysqli_fetch_array($queryDetails)) {
    $rezepttitel = $rezeptdaten["rezept_titel"];
    $beschreibung = $rezeptdaten["beschreibung_kurz"];
    $vorbereitungszeit = $rezeptdaten["vorbereitungszeit"];
    $kochzeit = $rezeptdaten["kochzeit"];
    $hauptbild = $rezeptdaten["haupt_bild"];
    $portionen = $rezeptdaten["portionen"];
    $gaengemenue = $rezeptdaten["gaengemenue"];
    $zubereitungsart = $rezeptdaten["zubereitungsart"];
    $schwierigkeitstufe = $rezeptdaten["schwierigkeitstufe"];
    $kategorie = $rezeptdaten["kategorie_name"];

    $rezept_num = $_GET["rezeptnum"];

?>
    <div class="details-title">
        <?php
        echo "<h2>$rezepttitel | $gaengemenue</h2>";
        include("edit_recipe_btns.php");
        ?>
    </div>
    <div class="details-container">
        <!-- Picture block of the details page -->
        <div id="details-head">
            <div class="details-img">
                <img src="uploaded/<?php echo $hauptbild ?>" alt="">
            </div>
            <div id="category-box">
                <div class="category">
                    <h2><?php echo $kategorie ?></h2>
                    <div>Kategorie</div>
                </div>
                <div class="category">
                    <h2><?php echo $portionen ?> St.</h2>
                    <div>Portionen</div>
                </div>
                <div class="category">
                    <h2><?php echo $vorbereitungszeit ?> min</h2>
                    <div>Vorbereitung</div>
                </div>
                <div class="category">
                    <h2><?php echo $kochzeit ?> min</h2>
                    <div>Kochzeit</div>
                </div>
                <div class="category">
                    <h2><?php echo $schwierigkeitstufe ?></h2>
                    <div>Schwierigkeit</div>
                </div>
                <div class="category">
                    <h2><?php echo $zubereitungsart ?></h2>
                    <div>Zubereitungsart</div>
                </div>
            </div>
        </div>

        <div id="description">
            <?php echo $beschreibung ?>
        </div>
        <h2>Zutaten</h2>
        <div>
            <?php include("edit_zutaten_btns.php") ?>
        </div>
        <?php include("zutaten.php"); ?>
        <h2>Zubereitung</h2>
        <div>
            <?php include("edit_zubereitung_btns.php") ?>
        </div>
        <?php include("zubereitung.php"); ?>
    </div>

<?php
}
?>