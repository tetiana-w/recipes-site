<p>"<?php echo $object ?>"</p>
<p>Wollen Sie wirklich löschen?</p>
    <form method="post">
        <div class="btn-form">
            <input class='btn btn-green' type='submit' value='Ja' name='del'>
            <a href='?link=all&rezeptnum=<?php echo $_GET["rezeptnum"]; ?>' class='btn btn-green'>Nein</a>
        </div>
    </form>