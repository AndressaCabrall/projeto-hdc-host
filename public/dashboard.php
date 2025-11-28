<?php 
session_start();

include '../config/conexao.php';
$pageCss = "../assets/css/dashboard.css";
include '../includes/header.php';
?>

<main class="dashboard-container">

<a href="../public/index.php">
            <img src="../assets/img/hdchostlogo.png" class="logo" alt="hDC hoster logo">

</a>

    <h1>Bem-vindo ao seu Dashboard</h1>

   <p> Olá <strong><?php echo $_SESSION['usuario_nome']; ?></strong>, 
   

    <p>Aqui é a sua área logada. Em breve você vai ver seus dados, ações e informações importantes.</p>

    <a class="logout-btn" href="logout.php">Sair da conta</a>

</main>

<?php 
    include '../includes/footer.php';
?>
