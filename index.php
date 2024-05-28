<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Online</title>
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="index_script.js"></script>
    <link rel="stylesheet" href="index_style.css">
   
</head>
<body>
    <header class="navbar navbar-expand-lg sticky-top p-4" id="cabecalho">
        <div class="container">
            <h1 id=title class="navbar-brand m-0 section-title">Sabor Online</h1>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
    <nav class="navbar-collapse collapse justify-content-end" id="menu-navegacao">
        <ul class="nav nav-pills d-block d-md-flex">
            <li class="nav-item fw-bold"><a href="#sobre-o-restaurante" class="nav-link"><i class="bi bi-house-door me-2"></i>Sobre o restaurante</a></li>
            <li class="nav-item fw-bold"><a href="#eventos" class="nav-link"><i class="bi bi-calendar-check me-2"></i>Eventos</a></li>
            <li class="nav-item fw-bold"><a href="#cardapio" class="nav-link"><i class="bi bi-card-text me-2"></i>Cardápio</a></li>
            <li class="nav-item fw-bold"><a href="#contato" class="nav-link"><i class="bi bi-chat-left-text me-2"></i>Fale conosco</a></li>
        </ul>
    </nav>   
</div>
        <div>
           <?php
            session_start();

            $isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'];
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
            
            if ($isLoggedIn) {
                echo '<div id="user-greeting" style="color: #fff; font-weight: bold; font-size: 20px; display: block; margin-top: 10px;">Olá, ' . $username . '</div>';
                
                echo '<button id="logout-btn" onclick="logout();"><strong>Sair</strong></button>';
            } else {
                echo '<button id="login-btn" onclick="window.location.href=\'login.html\';"><strong>Entrar</strong></button>';
                echo '<button id="register-btn" onclick="window.location.href=\'register.html\';"><strong>Cadastre-Se</strong></button>';
            }
            ?>
        </div>  


    </header>

    <div data-bs-spy="scroll" data-bs-target="cabecalho" data-bs-smooth-scroll="true">
        <section id="sobre-o-restaurante">
            <div class="carousel slide" data-bs-ride="carousel" id="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000"><img src="./images/slides/slide1.png" alt="Foto do restaurante" class="vw-100"></div>
                    <div class="carousel-item" data-bs-interval="3000"><img src="./images/slides/slide2.jpg" alt="Foto de várias bebidas" class="vw-100"></div>
                    <div class="carousel-item" data-bs-interval="3000"><img src="./images/slides/slide3.jpg" alt="Mesa com Pessoas" class="vw-100"></div>
                </div>

                
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>


                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" class="active" data-bs-slide-to="0"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
                </div>
            </div>
            <div class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5"><img class="d-block w-100 rounded" src="./images/restaurante.jpg" alt="Foto do espaço interno do restaurante"></div>
                        <div class="col-md-7 mt-3 mt-md-0">
                            <h2 class="section-title">Sobre o <span class="text-colored">Restaurante</span></h2>
                            <p>Bem-vindo ao Sabor Online, um oásis gastronômico onde os paladares mais exigentes encontram verdadeiros tesouros culinários. Situado em um local charmoso e acolhedor, o Sabor Online é mais do que um simples restaurante; é uma experiência para os sentidos.</p>
                            <h3 class="section-title">Sobre o <span class="text-colored">Espaço</span></h3>
                            <p>Adentre nosso espaço e deixe-se envolver pela atmosfera calorosa e acolhedora do Sabor Online. Com uma decoração que mescla elegância e simplicidade, criamos um ambiente perfeito para encontros familiares, jantares românticos ou celebrações especiais com amigos.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="eventos" class="pt-5 pb-5 ">
            <div class="container">
                <div class="row">
                    <h2 class="section-title text-center">Para todas as <span class="text-colored">ocasiões</span></h2>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <img src="./images/eventos/aniversario.jpg" alt="" class="d-block w-100 rounded mb-2">
                        <h3 class="section-title text-colored fs-4">
                            <i class="bi bi-calendar-heart-fill"></i>
                            Aniversários</h3>
                        <p>Celebre seu dia especial no Sabor Online! Desde festas intimistas até comemorações em grande estilo, estamos aqui para tornar o seu aniversário inesquecível. Desfrute de pratos deliciosos, ambiente acolhedor e um serviço atencioso. Deixe-nos cuidar de todos os detalhes para que você possa aproveitar ao máximo seu dia especial com amigos e familiares.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./images/eventos/casamento.jpg" alt="" class="d-block w-100 rounded mb-2">
                        <h3 class="section-title text-colored fs-4">
                            <i class="bi bi-arrow-through-heart-fill"></i>
                            Recepção para Casamentos</h3>
                        <p>Seja uma recepção íntima ou uma festa extravagante, estamos aqui para criar momentos memoráveis para você e seus convidados. Com uma seleção de pratos refinados, ambiente elegante e atendimento personalizado, sua recepção de casamento será verdadeiramente inesquecível.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./images/eventos/confraternizacoes.jpg" alt="" class="d-block w-100 rounded mb-2">
                        <h3 class="section-title text-colored">
                            <i class="bi bi-people-fill"></i>
                            Confraternizações</h3>
                        <p>Junte-se a nós para uma confraternização inesquecível no Sabor Online! Seja uma reunião informal entre colegas de trabalho ou uma festa de fim de ano com amigos, oferecemos o ambiente perfeito para celebrar momentos especiais juntos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cardapio" class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <h2 class="section-title text-center mb-5">Nosso <span class="text-colored">cardápio</span></h2>
                </div>
                <div class="row">
                    <aside class="col-md-2">
                        <nav class="nav nav-pills flex-column nav-cardapio">
                            <button type="button" data-bs-toggle="tab" data-bs-target="#bebidas-sem-alcool" class="nav-link text-colored fw-bold text-start active">Bebidas não alcoólicas</button>
                            <button type="button" data-bs-toggle="tab" data-bs-target="#bebidas-alcoolicas" class="nav-link text-colored fw-bold text-start">Bebidas alcoólicas</button>
                            <button type="button" data-bs-toggle="tab" data-bs-target="#entradas" class="nav-link text-colored fw-bold text-start">Entradas</button>
                            <button type="button" data-bs-toggle="tab" data-bs-target="#pratos-principais" class="nav-link text-colored fw-bold text-start">Pratos principais</button>
                            <button type="button" data-bs-toggle="tab" data-bs-target="#sobremesas" class="nav-link text-colored fw-bold text-start">Sobremesas</button>
                        </nav>
                    </aside>
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div class="tab-pane active" id="bebidas-sem-alcool">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/coca_cola.jpg" alt="Lata de Coca Cola">
                                        <h5 class="text-colored fw-bold mt-2">Refrigerante Coca-cola</h5>
                                        <p>Coca Cola lata 350ml</p>
                                        <p class="strong">R$6,99</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/suco_laranja.jpg" alt="Copo de Suco de Laranja">
                                        <h5 class="text-colored fw-bold mt-2">Suco de Laranja</h5>
                                        <p>Suco natural 500ml</p>
                                        <p class="strong">R$10,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/sprite.jpg" alt="Lata de Sprite">
                                        <h5 class="text-colored fw-bold mt-2">Refrigerante Sprite</h5>
                                        <p>Sprite Lata 350ml</p>
                                        <p class="strong">R$5,99</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/fanta.jpg" alt="Lata de Fanta">
                                        <h5 class="text-colored fw-bold mt-2">Refrigerante Fanta</h5>
                                        <p>Fanta Lata 350ml</p>
                                        <p class="strong">R$5,99</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/agua_tonica.jpg" alt="Garrafa Agua Tonica">
                                        <h5 class="text-colored fw-bold mt-2">Água Tônica</h5>
                                        <p>Água Tônica Schweppes 350ml</p>
                                        c
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/suco_maracuja.jpg" alt="Copo de Suco de Maracujá">
                                        <h5 class="text-colored fw-bold mt-2">Suco de Maracujá</h5>
                                        <p>Suco natural 500ml.</p>
                                        <p class="strong">R$9,50</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="bebidas-alcoolicas">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/cerveja.jpg" alt="Cerveja">
                                        <h5 class="text-colored fw-bold mt-2">Cerveja</h5>
                                        <p>Variedades de marcas, garrafa ou lata</p>
                                        <p class="strong">A partir de R$4,99</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/vinho.jpg" alt="Vinho">
                                        <h5 class="text-colored fw-bold mt-2">Vinho</h5>
                                        <p>Variedades de marcas, tinto e seco</p>
                                        <p class="strong">A partir de R$40,00</p>

                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/whisky.jpg" alt="Whisky">
                                        <h5 class="text-colored fw-bold mt-2">Whisky</h5>
                                        <p>Variedades de whisky, a dose 50ml</p>
                                        <p class="strong">A partir de R$10,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/bebidas/drinks.jpg" alt="Drinks">
                                        <h5 class="text-colored fw-bold mt-2">Drinks</h5>
                                        <p>Variedades de drinks, o copo 200ml</p>
                                        <p class="strong">A partir de R$12,00</p>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="tab-pane" id="entradas">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/entradas/bruschetta.jpg" alt="Bruschettas">
                                        <h5 class="text-colored fw-bold mt-2">Bruschettas</h5>
                                        <p>Fatias de pão levemente tostadas e cobertas com tomate, alho, azeite de oliva, queijo e ervas</p>
                                        <p class="strong">A porção R$15,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/entradas/carpaccio.jpg" alt="v">
                                        <h5 class="text-colored fw-bold mt-2">Carpaccio</h5>
                                        <p>Fatias finas de carne bovina crua marinadas em azeite, suco de limão, sal, pimenta e servidas com queijo parmesão e rúcula.</p>
                                        <p class="strong">A porção R$19,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/entradas/tabua_queijo.jpg" alt="Tábua de Queijo e Frios">
                                        <h5 class="text-colored fw-bold mt-2">Tábua de Queijo e Frios</h5>
                                        <p>Seleção de queijos brie, camembert, gorgonzola, acompanhados com salame, presunto, copa, azeitonas, frutas secas e pães.</p>
                                        <p class="strong">A porção R$22,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/entradas/saladas.jpg" alt="Saladas">
                                        <h5 class="text-colored fw-bold mt-2">Saladas</h5>
                                        <p>Saladas frescas e coloridas feitas com folhas verdes, legumes, queijos, frutas e nozes, temperadas com molhos diversos.</p>
                                        <p class="strong">A porção R$17,00</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="tab-pane" id="pratos-principais">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/pratos/file_mignon.jpg" alt="File Mignon">
                                        <h5 class="text-colored fw-bold mt-2">Filé Mignon ao Molho de Vinho Tinto</h5>
                                        <p>Filé mignon grelhado no ponto desejado e servido com um molho encorpado feito com vinho tinto, ervas e especiarias, acompanhado de purê de batatas ou legumes cozidos.</p>
                                        <p class="strong">O prato R$47,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/pratos/salmao.jpg" alt="Salmão">
                                        <h5 class="text-colored fw-bold mt-2">Salmão Grelhado com Molho de Ervas</h5>
                                        <p>Salmão grelhado regado ao molho fresco de ervas de dill, salsa e cebolinha, acompanhado de arroz integral e vegetais assados.</p>
                                        <p class="strong">O prato R$42,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/pratos/risoto.jpg" alt="Risoto de Cogumelos">
                                        <h5 class="text-colored fw-bold mt-2">Risoto de Cogumelos</h5>
                                        <p>Arroz arbóreo cozido em caldo de legumes, acompanhado de shiitake e champingon frescos, finalizado com queijo parmesão ralado e ervas frescas</p>
                                        <p class="strong">O prato R$35,00</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/pratos/frango.jpg" alt="Frango a Parmegiana">
                                        <h5 class="text-colored fw-bold mt-2">Frango à Parmegiana</h5>
                                        <p>Peito de frango empanado e frito, coberto com molho de tomate e queijo mussarela derretido, acompanhado de espaguete com molho de tomate e salada verde</p>
                                        <p class="strong">O prato R$39,00</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="tab-pane" id="sobremesas">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/sobremesas/cheesecake.jpg" alt="cheesecake de Morango">
                                        <h5 class="text-colored fw-bold mt-2">Cheesecake de Morango</h5>
                                        <p>Cheesecake feito com uma camada de biscoito esfarelado e uma camada cremosa de queijo creme, coberto com uma geleia de morango fresco.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/sobremesas/pudim.jpg" alt="Pudim de Leite Condensado">
                                        <h5 class="text-colored fw-bold mt-2">Pudim de Leite Condensado</h5>
                                        <p>Pudim feito de leite condensado, ovos e açúcar, servido com uma calda de caramelo</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/sobremesas/pave.jpg" alt="Pave de Chocolate">
                                        <h5 class="text-colored fw-bold mt-2">Pave de Chocolate</h5>
                                        <p>Pavê feito com camadas de biscoitos de chocolate embebidos em leite, e um creme macio de chocolate aerado, finalizado com raspas de chocolate por cima</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="d-block w-100 rounded" src="./images/cardapio/sobremesas/tiramisu.jpg" alt="Tiramisu">
                                        <h5 class="text-colored fw-bold mt-2">Tiramisu</h5>
                                        <p>Tiramisu feito por camadas de biscoitos de champanhe embebidos em café e creme de queijo mascarpone adoçado, pobilhado com cacau em pó</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <h2 class="section-title text-center">Fale <span class="text-colored">Conosco</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-7 mb-5">
                    <form id="contact-form" action="enviar_email.php" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label fw-bold text-colored">Seu nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold text-colored">Seu email:</label>
                            <input type="email" id="email" name="email" class="form-control" required value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label fw-bold text-colored">Seu Telefone:</label>
                            <input type="tel" id="telefone" name="telefone" class="form-control" value="<?php echo isset($_SESSION['telefone']) ? $_SESSION['telefone'] : ''; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="mensagem" class="form-label fw-bold text-colored">Sua mensagem:</label>
                            <textarea id="mensagem" name="mensagem" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="anonimo" name="anonimo">
                            <label class="form-check-label" for="anonimo">Enviar Anônimo</label>
                        </div>

                        <button type="submit" class="btn fw-bold">Enviar</button>

                    </form>

                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <h3 class="section-title fs-4 text-colored">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                Redes sociais
                            </h3>
                            <p>Nos acompanhe nas redes sociais</p>
                            <ul class="social-links">
                                <li class="fs-5">
                                    <a href="#">
                                        <i class="bi bi-facebook text-colored"></i>
                                    </a>
                                </li>
                                <li class="fs-5 ms-3 me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram text-colored"></i>
                                    </a>
                                </li>
                                <li class="fs-5">
                                    <a href="#">
                                        <i class="bi bi-whatsapp text-colored"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row mt-4">
                            <h3 class="section-title fs-4 text-colored">
                                <i class="bi bi-cursor-fill"></i>
                                Endereço
                            </h3>
                            <p>Av. Teste, nº321, Bairro Exemplo - Araraquara - SP</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="lib/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $('#telefone').mask('(00) 00000-0000');
    </script>
    
</body>
</html>