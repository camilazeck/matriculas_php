<?php
include_once("conexaodb.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Usuários</h1>

    <h2>Usuários cadastrados</h2>

    <h2>Adicionar novo usuário</h2>
    <form action="usuario_add.php" method="get">
        <label for="nome_usuario">Nome de usuário:</label>
        <input type="text" id="nome_usuario" name="nome_usuario">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
        <br>

        <label for="id_perfil">Perfil:</label>
        <select id="id_perfil" name="id_perfil">
            <option value="0">--- Selecione um perfil ---</option>
            <option value="1">Administrador</option>
            <option value="2">Auxiliar de matrículas</option>
            <option value="3">Atendente</option>
        </select>
        <br>

        <input type="submit">
    </form>
  </body>
</html>