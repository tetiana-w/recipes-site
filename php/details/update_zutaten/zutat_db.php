<?php
$query = mysqli_query(
    $datenbank,
    "select * from zutaten order by zutaten "
);
while ($zutatendaten = mysqli_fetch_array($query)) {
    $zutaten_num = $zutatendaten["zutaten_num"];
    $zutaten = $zutatendaten["zutaten"];

    $selected = "";
    if ($zutaten_num == $zutaten_num_fk) {
        $selected = 'selected="selected"';
    }
    echo "<option value='$zutaten_num' $selected >
                            $zutaten
                            </option>";
}
?>