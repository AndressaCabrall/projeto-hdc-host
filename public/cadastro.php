<?php 
include '../config/conexao.php';
$pageCss = "../assets.css/login.css";
include '../includes/header.php';
//Conexão com o Banco de dados e com o html e css
?>


         

        <main>

            <div class="main-banner">

            <a href="../public/index.php">
            <img src="../assets.img/hdchostlogo.png" class="logo" alt="hDC hoster logo">

                </a>


                <h1>Crie sua conta</h1>

                <form class="login-form" id="login-form" action="../config/processa_cadastro.php"  method="POST">

                    <input type="nome" name="nome" id="nome" placeholder="Digite seu nome">
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                    <input type="password" name="senha" id="senha" placeholder="Crie uma senha">
                    <input type="submit" value="Criar Conta">

                    <p>Faça já seu login! <a href="login.php">Login aqui</a></p>

                </form>
              
            </div>     

        </main>

        

        <script src="../assets.js/script.js"></script>

        <?php include '../includes/footer.php'; ?>