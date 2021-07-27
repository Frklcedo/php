<?php

require_once("config.php");

var_dump(session_status());

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "All sessions are disabled"; break;
    case PHP_SESSION_NONE:
        echo "There's no existing session"; break;
    case PHP_SESSION_ACTIVE:
        echo "There are existing sessions";

}

?>