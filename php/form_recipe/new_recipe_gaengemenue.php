<?php
    $gaengemenue_query = mysqli_query(
        $datenbank,
        "select * from gaengemenue order by gaengemenue"
    );
    while ($gaengemenuedaten = mysqli_fetch_array($gaengemenue_query)) {
        echo "<option value='
            " . $gaengemenuedaten["gaengemenue_num"] . "'>
            " . $gaengemenuedaten["gaengemenue"] . "
            </option>";
    }
?>