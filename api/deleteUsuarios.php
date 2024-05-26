<?php

require_once '../config/conexao.php';
$id = $_GET['id'];

if ($id != '') {
    try {
        $dados = $pdo->prepare("DELETE FROM usuarios WHERE id={$id}"); 
            $dados->execute();
            die(json_encode(['success' => 'usuário excluído com sucesso!']));

} catch (PDOException $e) {
        die(json_encode(['error' => $e->getMessage()]));
    
}
}
else {
    die(json_encode(['error' => 'Id não informado!']));
}

?>