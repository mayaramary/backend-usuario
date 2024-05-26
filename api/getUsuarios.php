<?php
require_once '../config/conexao.php';

try {
        $dados = $pdo->prepare("SELECT * FROM usuarios"); // variavel dados retornando do metodo prepare os dados instanciados do pdo
            $dados->execute(); // executando os dados recebidos
                $data = $dados->fetchAll(PDO::FETCH_ASSOC);
                    echo json_encode($data);
} catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
}
?>