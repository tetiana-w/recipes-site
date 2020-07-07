<?php
$query = mysqli_query(
    $datenbank,
    "select * from masseneinheit order by masseneinheit "
);
while ($masseneinheitdaten = mysqli_fetch_array($query)) {
    $masseneinheit_num = $masseneinheitdaten["masseneinheit_num"];
    $masseneinheit = $masseneinheitdaten["masseneinheit"];

    $selected = "";
    if ($masseneinheit_num == $masseneinheit_num_fk) {
        $selected = 'selected="selected"';
    }

    echo "<option value='$masseneinheit_num' $selected>
                        $masseneinheit
                        </option>";
}
?>