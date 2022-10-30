<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo do sistema</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Inicio
                    </span>
                </a>

            </li>
            <li>
                <a href="#">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                        Buscar
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-plus-square"></i>
                    <span class="nav-text">
                        Adicionar
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                        Sobre
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
                <a href="#">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Sair
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <main id="MainPage">
        <div>
            <ul>
                <li>
                    <div class="quadradoPost">
                        <div class="DenunciaPost">
                            <i class="fa fa-flag" aria-hidden="true"></i>
                        </div>
                        <div class="TituloPost">
                            <h2>Howdy</h2>
                        </div>
                        <div class="DescricaoPost">
                            <p>
                                A person who boosts his own energy by taking energy from others by means of an argument,
                                belittlement, criticism or other one-sided conversation.
                                My boss yelled at me for 15 minutes and now I feel like shit.
                                He is such an energy vampire
                            </p>
                        </div>
                        <div class="LikePost">
                            <i class="fa fa-thumbs-up"></i>
                            <i class="fa fa-thumbs-down"></i>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <div>
            <p class="Link"><a href="#">Back to top</a></p>
        </div>
        <div>
            <p class="Link">&copy;
                <?= date('Y'); ?> Street Slang. &middot; <a href="#">Privacy</a>
                &middot; <a href="#">Terms</a>
            </p>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="layout.js"></script>
</body>

</html>