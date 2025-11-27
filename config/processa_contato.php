<?php

include 'conexao.php';

// Verificar se o formulário enviou os dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Validação básica
    if (empty($nome) || empty($email) || empty($mensagem)) {
        header("location: ../public/index.php?erro=campos_vazios");
        exit;
    }

    // Inserir no banco de dados
    $stmt = $conn->prepare("INSERT INTO mensagens_contato (nome, email, mensagem) VALUES (?,?,?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem);

    // Volta para a página do INDEX com sinal de sucesso
    if ($stmt->execute()) {
        header("location: ../public/index.php?sucesso=mensagem#contact");
        exit;
    } else {
        echo "Erro ao enviar mensagem.";
    }
    
    $stmt->close();
}

$conn->close();

?>