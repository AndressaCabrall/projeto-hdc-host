<?php 
$pageCss = "../assets/css/login.css";
include '../includes/header.php';
?>


           
   
        <main>

            <div class="main-banner">

            <a href="#">
            <img src="../assets/img/hdchostlogo.png" class="logo" alt="hDC hoster logo">

                </a>


                <h1>Acesse sua conta</h1>

                <form class="login-form" id="login-form" action="php/validar-login.php" method="POST">
                    
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    <input type="submit" value="Entrar">
                    
                    <p>Não tem conta ainda? <a href="cadastro.php">Cadastre-se</a></p>
                   


                </form>
            </div>     

        </main>

        

        <script src="../assets/script.js"></script>

        <?php include '../includes/footer.php'; ?>



