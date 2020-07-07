<?php
function check_login($login, $datenbank)
{    
    $query_login = mysqli_query(
        $datenbank,
        "select login from user where login = '$login'"
    );
    if ($query_login->num_rows == 1 || $login == "") {
        return false;
    } else {
        return true;
    }
}
