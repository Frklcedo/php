<?php

session_start();

echo $_SESSION['nome'];

session_destroy($_SESSION['nome']);

?>