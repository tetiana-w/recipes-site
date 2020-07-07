<form method="post" enctype="multipart/form-data">
    <label>Titel</label>
    <input type="text" value="<?php echo $rezepttitel ?>" name="titel_update">

    <label>Beschreibung</label>
    <textarea name="beschreibung_update"><?php echo $beschreibung ?></textarea>

    <label>Kategorie</label>
    <select name="kategorie_update">
        <?php include("update_kategorie.php") ?>
    </select>

    <label>Gängemenü</label>
    <select name="gaengemenue_update">
        <?php include("update_gaengemenue.php"); ?>
    </select>

    <label>Zubereitungsart</label>
    <select name="zubereitungsart_update">
        <?php include("update_zubereitungsart.php"); ?>
    </select>

    <label>Portionen</label>
    <input type="number" value="<?php echo $portionen ?>" name="portionen_update" min="1"></input>

    <label>Vorbereitungszeit, min</label>
    <input type="number" value="<?php echo $vorbereitungszeit ?>" name="vorbereitungszeit_update" min="1"></input>

    <label>Kochzeit, min</label>
    <input type="number" name="kochzeit_update" min="0" value="<?php echo $kochzeit ?>"></input>

    <label>Schwierigkeitstufe</label>
    <select name="schwierigkeit_update">
        <?php include("update_schwierigkeitstufe.php"); ?>
    </select>

    <label>Hauptbild</label>
    <div class="bild-box">        
        <input type="file" name="hauptbild"></input>
        <img src="uploaded/<?php echo $hauptbild ?>" alt="" />
    </div>
    
    <input class='btn btn-green' type='submit' value='Speichern' name='rezept_update'>
    <a href='?link=all&rezeptnum=<?php echo $_GET["rezeptnum"]; ?>' class='btn btn-green'>Zurück</a>
</form>