<?php
include("check_login.php");
if (isset($_POST["reg"])) {
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $passwort = password_hash($_POST["passwort"], PASSWORD_DEFAULT);

    $is_login_valid = check_login($login, $datenbank);

    if ($is_login_valid) {
        $query_new_user =  mysqli_query(
            $datenbank,
            "insert into user (
                    vorname,
                    nachname,
                    email,
                    login,
                    passwort
                )
                values (
                    '$vorname',
                    '$nachname',
                    '$email',
                    '$login',
                    '$passwort'                
                )"
        );
        if ($datenbank->affected_rows == 1 && $datenbank->error == "") {
            echo "<div class='message'><p>Registrieren war erfolgreich</p></div>";
        }
    } else {
        echo "<div class='error-message'><p>Login ist nicht gültig</p></div>";
    }
}
