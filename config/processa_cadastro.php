<?php
include 'conexao.php';

//conexão com o Banco de dados

//Verificar se o formulário enviou os dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    //Validar se o e-mail já existe

    $verificaEmail = $conn->prepare('SELECT id FROM usuarios_cadastro WHERE email = ?'); 
    $verificaEmail->bind_param("s", $email); 
    $verificaEmail->execute(); 
    $verificaEmail->store_result(); 

    if ($verificaEmail->num_rows > 0) {

        header("location: ../public/cadastro.php?erro=email_existente");
        exit;
    } //aqui verifico se o email já existe no banco de dados

    //Inserir os dados no banco de dados

    $stmt = $conn->prepare("INSERT INTO usuarios_cadastro (nome, email, senha) VALUES (?,?,?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {

        header("location: ../public/login.php?sucesso=cadastro");
       
    } else {

echo "Erro ao cadastrar: ";

    }

}
?>