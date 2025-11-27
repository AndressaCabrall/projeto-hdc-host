<?php
session_start();
include "conexao.php";

//Verifica se enviou os dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email =$_POST['email'];
    $senha =$_POST['senha'];

//Buscar o usuario no banco de dados

    $sql = "SELECT * FROM usuarios_cadastro WHERE email = ?";
    $stmt= $conn->prepare($sql); 


    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute(); 

    $resultado = $stmt->get_result(); 

    //Verifica se o email existe

    if ($resultado->num_rows === 1) {

        $usuario = $resultado-> fetch_assoc();

        // Verifica a senha agora 

        if (password_verify($senha, $usuario['senha'])) {

            //Cria a sessão do usuário

            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            header("location: ../public/dashboard.php");
            exit;

        } else { 

            header("location: ../public/login.php?erro=senha");
            exit;
        }

        } else {

         header("location: ../public/login.php?erro=email");
            exit;
    }

            $stmt->close();
}

            $conn-> close();
?>