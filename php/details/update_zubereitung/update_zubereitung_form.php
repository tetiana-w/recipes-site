<form method="post">
    <div class="zubereitung-input">
        <label>Schritt</label>
        <input type="number" value="<?php echo $schritt_num; ?>" min="1" name="schritt" />
        <label>Zubereitung</label>
        <textarea rows="6" name="zubereitung"><?php echo $zubereitung; ?></textarea>
    </div>
    <div class="zubereitung-input">
        <div class="btn-form">
            <input class='btn btn-green' type='submit' value='Speichern' name='update_zubereitung'>
            <a href='?link=all&rezeptnum=<?php echo $rezept_num ?>' class='btn btn-green'>Zurück</a>
        </div>
    </div>
</form>