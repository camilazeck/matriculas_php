<?php
//escreve o conteúdo recebido pelo formulário na tela
//var_dump($_GET);

$nome_usuario = $_GET["nome_usuario"];
$senha = $_GET["senha"];
$id_perfil = $_GET["id_perfil"];

echo("O nome de usuário é: " . $nome_usuario . "<br>");
echo("A senha é: " . $senha . "<br>");
echo("O perfil é: " );
switch ($id_perfil) {
    case 1:
        echo "Administrador";
        break;
    case 2:
        echo "Auxiliar de matrícula";
        break;
    case 3:
        echo "Atendente";
        break;
    default:
        //se não for nenhuma das opções (1, 2 ou 3),
        //encerre o código PhP (não processa nenhuma linha depois do "die")
        echo "Erro: Perfil inválido!<br>";
        die("<a href='javascript:history.back()'>Voltar</a>");
}

if (empty($nome_usuario)) {
    echo "Erro: O nome de usuário não pode estar vazio.";
    die("<a href='javascript:history.back()'>Voltar</a>");
}