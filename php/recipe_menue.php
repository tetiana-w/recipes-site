<?php
$queryGaengemenue = mysqli_query(
    $datenbank,
    "select * from gaengemenue"
);

while (
    $gaengemenuedaten = mysqli_fetch_array($queryGaengemenue)
) {
    $gaengemenuenum = $gaengemenuedaten["gaengemenue_num"];
    $gaengemenue = $gaengemenuedaten["gaengemenue"]; 
    $auswahl = "dark";   
    if (
        isset($_GET["gaengemenue"]) &&
        $_GET["gaengemenue"] == $gaengemenuenum        
    ) {
        $auswahl = "bright";
    } 
    echo "
            <a class='menu-links $auswahl' href='?link=" . $_GET["link"] .
             "&gaengemenue=$gaengemenuenum'>
                $gaengemenue
            </a>
        ";
}
$auswahl = (isset($_GET["gaengemenue"]) &&
$_GET["gaengemenue"] == 0 || !isset($_GET["gaengemenue"])) ? "bright" : "dark";
echo "
<a class='menu-links $auswahl' href='?link=" . $_GET["link"] .
 "&gaengemenue=0'>
    Alle
</a>
";
?>