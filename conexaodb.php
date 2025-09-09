<?php

// Definição das constantes de conexão
define('DB_HOST', 'localhost');  // Onde o banco de dados está hospedado
define('DB_USER', 'root');     // Seu nome de usuário do banco de dados
define('DB_PASS', '');     // Sua senha do banco de dados
define('DB_NAME', 'matriculas');     // O nome do seu banco de dados

try {
    // Criação da string de conexão (DSN)
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";

    // Criação da instância PDO
    $pdo = new PDO($dsn, DB_USER, DB_PASS);

    // Configuração do modo de erro para lançar exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemplo de como usar a conexão (opcional, para teste)
    //echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Em caso de falha, exibe a mensagem de erro e interrompe a execução
    die("Erro na conexão ao banco de dados: " . $e->getMessage());
}