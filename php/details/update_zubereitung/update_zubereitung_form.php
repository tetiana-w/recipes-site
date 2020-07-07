
<div class="zubereitung-form">
    <form method="post">
        <div class="zubereitung-input">
            <label>Schritt</label>
            <input type="number" value="<?php echo $schritt_num; ?>" min="1" name="schritt" />
            <label>Zubereitung</label>
            <textarea rows="6" name="zubereitung"><?php echo $zubereitung; ?></textarea>
        </div>
        <div class="zutaten-input">
            <input class='btn btn-green' type='submit' value='S' name='update_zubereitung'>
        </div>
    </form>
</div>