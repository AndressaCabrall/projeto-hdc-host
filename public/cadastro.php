<?php 
$pageCss = "../assets/css/login.css";
include '../includes/header.php';
?>


           
   
        <main>

            <div class="main-banner">

            <a href="#">
            <img src="../assets/img/hdchostlogo.png" class="logo" alt="hDC hoster logo">

                </a>


                <h1>Crie sua conta</h1>

                <form class="login-form" id="login-form" action="php/validar-login.php" method="POST">

                    <input type="name" name="name" id="name" placeholder="Digite seu nome">
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                    <input type="password" name="senha" id="senha" placeholder="Crie uma senha">
                    <input type="submit" value="Entrar">

                    <p>Faça já seu login! <a href="login.php">Login aqui</a></p>

                </form>
              
            </div>     

        </main>

        

        <script src="../assets/script.js"></script>

        <?php include '../includes/footer.php'; ?>