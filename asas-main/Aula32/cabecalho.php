<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />

    <title>CRUD PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .font-1 {
            color: #000 !important;
            font-weight: bolder;
        }

        #toggle-nav {
            position: fixed;
            top: 1rem;
            left: 1rem;
            background-color: #1f1f1f;
            color: #f0f0f0;
            border: none;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s;
        }

        #toggle-nav:hover {
            background-color: #1db954;
        }


        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }


        #ponto {
            animation: rotar 3s erase-in-out;
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        .nav-item:hover {
            /*background-color: #e3e3e3; */
            transform: scale(1.1);
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="dist/dashboard.css" rel="stylesheet">


</head>

<body>
    <?php
    if (!function_exists("autenticado")) {
        ?>

        <br>
        <h1>Atenção você esqueceu o require do arquivo <br><strong><code>logica-autenticacap.php</code></strong>!</h1>
        <?php
        die();
    }
    ?>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
            CRUD PHP
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto px-3 pb-2">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario_inserir.php">Formulário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listagem-cards.php">Listagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light btn-sm btn-block font-1 my-1" href="form-login.php">
                        Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger btn-sm btn-block font-1 my-1" href="sair.php">Sair</a>
                </li>
            </ul>
        </div>
        <div
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start pe-3 d-none d-sm-block">
            <div class="text-end">
                
                <?php
                if (!autenticado()) {
                    ?>
                    <a href="formulario_usuarios.php" class="btn btn-info me-2">
                        <span data-feather="user-plus"></span>
                        Cadastrar
                    </a>
                    <a href="form-login.php" class="btn btn-light me-2">
                        <span data-feather="log-in"></span>
                        Entrar
                    </a>
                    <?php
                } else {
                    ?>

                    <span class="navbar-text">
                        <span data-feather="user"></span>
                        <span class="fs-4 mx-2">
                            <?= nome_usuario(); ?></span>
                    </span>

                    <a href="sair.php" class="btn btn-danger me-2">
                        <span data-feather="log-out"></span>
                        Sair
                    </a>
                    <?php
                }
                ?>



            </div>
        </div>

    </header>
    

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky mt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="inicio.php">
                                <span data-feather="home"></span>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="formulario_inserir.php">
                                <span data-feather="file-text"></span>
                                Formulário
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="listagem.php">
                                <span data-feather="list"></span>
                                Listagem
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="listagem-cards.php">
                                <span data-feather="list"></span>
                                locais
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="listagem-usuarios.php">
                                <span data-feather="list"></span>
                                Listagem de Usuarios
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="toggle-nav"><div id="ponto" >
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </div></div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?= $titulo; ?></h1>
                </div>
                <br>