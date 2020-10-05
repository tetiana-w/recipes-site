<?php
if (isset($_POST["login"])) {

    $datenbank = mysqli_connect("localhost", "root", "", "rezepte");
    mysqli_query($datenbank, "set names utf8");

    // SQL-Injection verhindern
    $login = mysqli_real_escape_string($datenbank, $_POST["login"]);    
    $passwort = mysqli_real_escape_string($datenbank, $_POST["passwort"]);

    $query_user = mysqli_query(
        $datenbank,
        "select * from user where login ='$login'"
    );

    if ($query_user->num_rows == 1) {
        $user_db = mysqli_fetch_array($query_user);
        $passwort_db = $user_db["passwort"];
        //$vorname  = $user_db["vorname"];

        if (password_verify($passwort, $passwort_db)) {
            $_SESSION["eingeloggt"] = true;
        } else {
            $loginfehler = "<div class='error-message'><p>Das Passwort oder das Login ist leider falsch</p></div>";
        }
    } else {
        $loginfehler = "<div class='error-message'><p>Einloggen hat nicht geklappt</p></div>";
    }

    mysqli_close($datenbank);
}
