<form method="post" enctype="multipart/form-data">
    <label>Titel</label>
    <input type="text" placeholder="Titel" name="titel">

    <label>Beschreibung</label>
    <textarea placeholder="Beschreibung.." name="beschreibung"></textarea>

    <label>Kategorie</label>
    <select name="kategorie">
        <?php include("new_recipe_kategorie.php"); ?>
    </select>

    <label>Gängemenü</label>
    <select name="gaengemenue">
        <?php include("new_recipe_gaengemenue.php"); ?>
    </select>

    <label>Zubereitungsart</label>
    <select name="zubereitungsart">
        <?php include("new_recipe_zubereitungsart.php"); ?>
    </select>

    <label>Portionen</label>
    <input type="number" name="portionen" min="1"></input>

    <label>Vorbereitungszeit, min</label>
    <input type="number" name="vorbereitungszeit" min="1"></input>

    <label>Kochzeit, min</label>
    <input type="number" name="kochzeit" min="0"></input>

    <label>Schwierigkeitstufe</label>
    <select name="schwierigkeitstufe">
        <?php include("new_recipe_schwierigkeitstufe.php"); ?>
    </select>

    <label>Hauptbild</label>
    <input type="file" name="hauptbild"></input>
    <?php 
    if (isset($_FILES["hauptbild"])) {
       echo  $quelle = $_FILES["hauptbild"]["tmp_name"];
    }
    ?>
   
   <input class='btn btn-green' type='submit' value='Speichern' name='rezept_speichern'> 

</form>