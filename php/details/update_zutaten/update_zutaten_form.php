<form method="post" class="zutaten-form-update">
    <div class="zutaten-input">
        <label>Zutat</label>
        <select type="text" name="<?php echo "zutaten_update" ?>">
            <?php include("zutat_db.php"); ?>
        </select>
    </div>
    <div class="zutaten-input">
        <label>Menge</label>
        <input type="text" value="<?php echo $zutaten_menge; ?>" name="menge_update">
    </div>
    <div class="zutaten-input">
        <label>Maßeneinheit</label>
        <select type="text" name="masseinheit_update">
            <?php include("masseneinheit_db.php"); ?>
        </select>
    </div>
    <div class="zutaten-input">
        <input class='btn btn-green' type='submit' value='S' name='update_zutaten'>

    </div>
</form>