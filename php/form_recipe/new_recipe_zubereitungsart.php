<?php
     $zubereitungsart_query = mysqli_query(
        $datenbank,
        "select * from zubereitungsart order by zubereitungsart"
    );
    while ($zubereitungsartdaten = mysqli_fetch_array($zubereitungsart_query)) {
        echo "<option value='
            " . $zubereitungsartdaten["zubereitungsart_num"] . "'>
            " . $zubereitungsartdaten["zubereitungsart"] . "
            </option>";
    }
?>