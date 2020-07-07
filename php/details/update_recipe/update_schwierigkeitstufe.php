<?php
$schwierigkeitstufen_query = mysqli_query(
    $datenbank,
    "select * from schwierigkeitstufen order by schwierigkeitstufe"
);
while ($schwierigkeitstufendaten = mysqli_fetch_array($schwierigkeitstufen_query)) {
    $schwierigkeit_num = $schwierigkeitstufendaten["schwierigkeit_num"];
    $schwierigkeit_name =  $schwierigkeitstufendaten["schwierigkeitstufe"];

    $selected = "";
    if ($schwierigkeit_num == $schwierigkeitstufe) {
        $selected = 'selected="selected"';
    }

    echo "<option value='$schwierigkeit_num' $selected>
                $schwierigkeit_name
                </option>";
}
