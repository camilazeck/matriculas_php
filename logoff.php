<?php
//apagar o cookie de login
setcookie("login", null, -1);
//redirecionar o usuário para a tela principal do app.
//como o usuário não está mais autenticado no app,
//ele será redirecionado para a página de login.
header("Location: index.php");