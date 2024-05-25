<?php

//variaveis
$host       = 'localhost';
$banco      = 'cad_embras';
$usuario    = 'root';
$senha      = '';

//conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha); //facilitador de conexão
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //método da instância da classe PDO
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

?>