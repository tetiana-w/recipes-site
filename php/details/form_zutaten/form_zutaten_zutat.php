<?php
     $query = mysqli_query(
        $datenbank,
        "select * from zutaten order by zutaten "
    );
    while ($zutatendaten = mysqli_fetch_array($query)) {
        echo "<option value='
        " . $zutatendaten["zutaten_num"] . "'>
        " . $zutatendaten["zutaten"] . "
        </option>";
    }
?>