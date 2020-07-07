<?php
$zubereitungsart_query = mysqli_query(
    $datenbank,
    "select * from zubereitungsart order by zubereitungsart"
);
while ($zubereitungsartdaten = mysqli_fetch_array($zubereitungsart_query)) {
    $zubereitungsart_num = $zubereitungsartdaten["zubereitungsart_num"];
    $zubereitungsart_name = $zubereitungsartdaten["zubereitungsart"];

    $selected = "";
    if ($zubereitungsart_num == $zubereitungsart) {
        $selected = 'selected="selected"';
    }

    echo "<option value='$zubereitungsart_num' $selected>
                    $zubereitungsart_name
                    </option>";
}
