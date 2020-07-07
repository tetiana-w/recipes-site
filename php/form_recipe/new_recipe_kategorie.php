<?php
     $query = mysqli_query(
        $datenbank,
        "select * from kategorien order by kategorie_name "
    );
    while ($kategoriedaten = mysqli_fetch_array($query)) {
        echo "<option value='
        " . $kategoriedaten["kategorie_num"] . "'>
        " . $kategoriedaten["kategorie_name"] . "
        </option>";
    }
    echo $datenbank->error;
?>