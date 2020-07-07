<p>"<?php echo $object ?>"</p>
<p>Wollen Sie wirklich löschen?</>
<div class="loeschen-btn">
    <form method="post">
        <input class='btn btn-green' type='submit' value='Ja' name='del'>
    </form>
    <a href='?link=all&rezeptnum=<?php echo $_GET["rezeptnum"]; ?>' class='btn btn-green'>Nein</a>
</div>