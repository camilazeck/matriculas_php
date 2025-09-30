<?php

include_once("conexaodb.php");

// Formulário envia o nome de usuário e senha como POST
// a fim de ocultar essa informação na URL ao enviar o formulário de login
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

if(empty($usuario)) {
    die("Nome de usuário não pode estar em branco!");
}

if(empty($senha)) {
    die("A senha não pode estar em branco!");
}

try {
    // O nome de usuário e a senha cadastradas devem corresponder as informações
    // armazenadas no banco de dados
    $stmt = $pdo->prepare("SELECT * FROM `usuarios` WHERE NomeUsuario = :usuario AND Senha = :senha LIMIT 1");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    
    // Se o número de usuários retornados for maior do que zero, ou seja, 
    // Existe um usuário com a senha informada no banco de dados
    $dados = $stmt->fetchAll();
    if (count($dados) == 1) {
        // Autentica o usuário no sistema com o nome de usuário informado
        setcookie("login", $usuario);
        header("Location: index.php");
    } else {
        die("Nome de usuário e/ou senha inválido(s)!");
    }
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

?>