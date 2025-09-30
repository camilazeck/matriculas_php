<?php
$login_cookie = $_COOKIE["login"];
if(!isset($login_cookie)) {
    // Usuário não está autenticado, redireciona ele para a página de login.
    header("Location: login.php");
}