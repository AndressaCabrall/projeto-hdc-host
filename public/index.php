<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hDC host</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Icones  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="icon" type="image/png" href="../assets/img/hdchostlogo.png">


</head>

<body>

    <!-- Container -->
    <div class="container">

        <!--Navbar-container  -->
        <div class="navbar-container">
            <nav>
                <a href="#">
                <img src="../assets/img/hdchostlogo.png" class="logo" alt="hDC hoster logo">

                </a>

                <!--Menu desktop  -->

                <ul class="navbar-itens">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#pricing">Preços</a>
                    </li>
                    <li>
                        <a href="#contact">Contato</a>
                    </li>
                    <li>
                        <a href="../public/login.php" class="default-btn">Login</a>

                    </li>
                    <li>
                        <a href="../public/cadastro.php" class="default-btn">Criar Conta</a>

                    </li>

                </ul>

                <!--Menu mobile  -->

                <div class="mobile-menu" id="mobile-menu">

                    <ul class="navbar-itens-mobile">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#pricing">Preços</a>
                        </li>
                        <li>
                            <a href="#contact">Contato</a>
                        </li>
                        <li>
                            <a href="php/login.php" class="default-btn">Login</a>
    
                        </li>
                        <li>
                            <a href="php/criar-conta" class="default-btn">Criar Conta</a>
    
                        </li>

                    </ul>


                </div>

                <button class="menu-button" id="menu-button">
                    <i class="fas fa-bars"></i>
                </button>

            </nav>

        </div> <!--Navbar-container-->

        <!-- Main -->

        <main id="home">

            <div class="main-banner">

                <h1>hDC Host</h1>
                <p>Os melhores serviços para projetos de todos os tamanhos! </p>


            </div>

            <!-- Section Services -->

            <section class="services-container">

                <ul>
                    <li>
                        <i class="fas fa-rocket"></i>
                        <h3>Performance</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, ipsum corporis. Numquam nam
                            sit
                            quisquam similique esse eligendi repellendus saepe iure voluptate dicta? Dicta minus
                            possimus
                            culpa eos, numquam perferendis.</p>

                    </li>

                    <li>
                        <i class="fas fa-shield-alt"></i>
                        <h3>Segurança</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, ipsum corporis. Numquam nam
                            sit
                            quisquam similique esse eligendi repellendus saepe iure voluptate dicta? Dicta minus
                            possimus
                            culpa eos, numquam perferendis.</p>

                    </li>

                    <li>
                        <i class="fas fa-comments"></i>
                        <h3>Suporte 24/7</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, ipsum corporis. Numquam nam
                            sit
                            quisquam similique esse eligendi repellendus saepe iure voluptate dicta? Dicta minus
                            possimus
                            culpa eos, numquam perferendis.</p>

                    </li>

                </ul>


            </section>

            <!-- Section Pricing and Plans -->
            <section class="pricing-container" id="pricing">

                <h2>Planos e Preços</h2>
                <p>Selecione o plano que atende as suas necessidades.</p>

                <div class="plans-container">

                    <div class="plan">

                        <ul>
                            <li class="price">R$15/mês</li>
                            <li class="plan-name">Básico</li>
                            <li>2GB de espaço</li>
                            <li>1 Subdomínio</li>
                            <li>25 contas de e-mail</li>
                            <li>C-panel</li>
                            <li>Suporte 24/7</li>
                            <li class="plan-btn">Saber mais</li>

                        </ul>
                    </div>
                    <div class="plan">

                        <ul>
                            <li class="price">R$30/mês</li>
                            <li class="plan-name">Dedicado</li>
                            <li>5GB de espaço</li>
                            <li>10 Subdomínio</li>
                            <li>50 contas de e-mail</li>
                            <li>C-panel</li>
                            <li>Suporte 24/7</li>
                            <li class="plan-btn">Saber mais</li>

                        </ul>
                    </div>
                    <div class="plan">

                        <ul>
                            <li class="price recommended">R$50/mês</li>
                            <li class="plan-name">Dedicado Plus</li>
                            <li>10GB de espaço</li>
                            <li>10 Subdomínio</li>
                            <li>100 contas de e-mail</li>
                            <li>C-panel</li>
                            <li>Suporte 24/7</li>
                            <li class="plan-btn recommended">Saber mais</li>

                        </ul>
                    </div>
                    <div class="plan">

                        <ul>
                            <li class="price">R$100/mês</li>
                            <li class="plan-name">Cloud</li>
                            <li>20GB de espaço</li>
                            <li>20 Subdomínio</li>
                            <li>200 contas de e-mail</li>
                            <li>C-panel</li>
                            <li>Suporte 24/7</li>
                            <li class="plan-btn">Saber mais</li>

                        </ul>
                    </div>

                </div>

            </section> <!--seccion pricing-->

            <!-- Section Domain-->
            <section class="searchdomain-container">

                <h2>Qual domínio você quer para o seu site</h2>
                <p>Verifique se o domínio está disponível.</p>

                <form>
                    <input type="text" name="domain" id="domain" placeholder="Digite o domínio desejado">
                    <input type="submit" value="Procurar Domínio">

                </form>

            </section>

            <!-- Section Contact-->

            <section class="contact-container" id="contact">

                <!-- Modal de Sucesso -->
                <div id="modalSucesso" class="modal">
                    <div class="modal-content">
                        <span class="close"></span>
                        <h2>✓ Mensagem Enviada com Sucesso!</h2>

                        <button class="modal-btn">Fechar</button>
                    </div>
                </div>

                <h2>Mande uma mensagem</h2>
                <p>Envie a sua mensagem, em até 04 horas um especialista entrará em contato.</p>

                <form class=  "contact-form" id = "contact-form" action ="../config/processa_contato.php" method ="POST" >

                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome"required>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail"required>
                    <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem"required></textarea>
                    <input type="submit" value="Enviar Mensagem">

                </form>

            </section>
        </main>

        <footer>
            <p>hDC host @ 2025</p>

        </footer>



    </div> <!--container-->

    <script src="../assets/script.js"></script>

</body>

</html>