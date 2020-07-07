<?php
$gaengemenue_query = mysqli_query(
    $datenbank,
    "select * from gaengemenue order by gaengemenue"
);
while ($gaengemenuedaten = mysqli_fetch_array($gaengemenue_query)) {
    $gaengemenue_num =  $gaengemenuedaten["gaengemenue_num"];
    $gaengemenue_name =  $gaengemenuedaten["gaengemenue"];
    
    $selected = "";
    if ($gaengemenue_num == $gaengemenue) {
        $selected = 'selected="selected"';
    }

    echo "<option value='$gaengemenue_num' $selected>
            $gaengemenue_name
            </option>";
}
?>