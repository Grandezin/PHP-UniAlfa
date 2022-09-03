<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carro Novinho</title>
    <link rel="shortcut icon" href="imagens/icone.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap"
    rel="stylesheet">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="header">
        <a href="index.php" title="home">
            <img src="imagens/logo.png" alt="home">
        </a>
        
        <nav class="header-nav">
            <ul>
                <li>
                    <a href="index.php" title="contato">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=sobre" title="contato">
                        <i class="fa-solid fa-user-tie"></i>
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=carros" title="carros">
                        <i class="fa-solid fa-car"></i>
                        Carros
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=contato" title="contato">
                        <i class="fa-solid fa-envelope"></i>    
                        Contato
                    </a>
                </li>
            </ul>
        </nav>


    </header>

    <main>
        <?php
            $pagina = $_GET["pagina"] ?? "home";
            //echo $pagina;

            $pagina = "paginas/{$pagina}.php";

            if( file_exists(($pagina))){
                include "dados.php";
                include $pagina;
            }else{
                include "paginas/erro.php";
            }
        ?>
    </main>
    
</body>
</html>