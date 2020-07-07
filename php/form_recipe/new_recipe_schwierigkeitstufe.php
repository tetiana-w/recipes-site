<?php
$schwierigkeitstufen_query = mysqli_query(
    $datenbank,
    "select * from schwierigkeitstufen order by schwierigkeitstufe"
);
while ($schwierigkeitstufendaten = mysqli_fetch_array($schwierigkeitstufen_query)) {
    echo "<option value='
        " . $schwierigkeitstufendaten["schwierigkeit_num"] . "'>
        " . $schwierigkeitstufendaten["schwierigkeitstufe"] . "
        </option>";
}
