<?php
     $query = mysqli_query(
        $datenbank,
        "select * from masseneinheit order by masseneinheit "
    );
    while ($kategoriedaten = mysqli_fetch_array($query)) {
        echo "<option value='
        " . $kategoriedaten["masseneinheit_num"] . "'>
        " . $kategoriedaten["masseneinheit"] . "
        </option>";
    }
?>