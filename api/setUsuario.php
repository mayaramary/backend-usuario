<?php
require_once '../config/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];

if ($nome != '' && $email != '') {
    try {
        $dados = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES ('{$nome}' , '{$email}') "); 
            $dados->execute();
            die(json_encode(['success' => 'usuário inserido com sucesso!']));

} catch (PDOException $e) {
        die(json_encode(['error' => $e->getMessage()]));
    
}
}
else {
    die(json_encode(['error' => 'Preencha todos os campos!']));
}

?>