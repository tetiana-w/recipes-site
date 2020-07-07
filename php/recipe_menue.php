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
    echo "<li>
            <a href='?link=" . $_GET["link"] .
             "&gaengemenue=$gaengemenuenum' class='$auswahl'>
                $gaengemenue
            </a>
        </li>";
}
$auswahl = (isset($_GET["gaengemenue"]) &&
$_GET["gaengemenue"] == 0 || !isset($_GET["gaengemenue"])) ? "bright" : "dark";
echo "<li>
<a href='?link=" . $_GET["link"] .
 "&gaengemenue=0' class='$auswahl'>
    Alle
</a>
</li>";
?>