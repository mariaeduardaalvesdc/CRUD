<?php
if(!isset($_SESSION)) {
    session_start();
}
 if(!isset($_SESSION['id'])) {
    die("Você não tem permissão para acessar esta página!");
}

?>