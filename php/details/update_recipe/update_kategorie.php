<?php     
        $query = mysqli_query(
        $datenbank,
        "select * from kategorien order by kategorie_name "
    );
    while ($kategoriedaten = mysqli_fetch_array($query)) {
        $kategorie_num = $kategoriedaten["kategorie_num"];
        $kategorie_name = $kategoriedaten["kategorie_name"];

        $selected = "";
        if ($kategorie_num == $kategorie) {
            $selected = 'selected="selected"';
        }

        echo "<option value='$kategorie_num' $selected >
        $kategorie_name
        </option>";
    }
    echo $datenbank->error;
?>