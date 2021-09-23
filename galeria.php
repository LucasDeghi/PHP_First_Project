<?php include "cabecalho.php"?>

<?php

$bd = new SQLite3("Animes.db");
$sql = "SELECT * from animaction";
$animes = $bd -> query($sql);



$anime1 = [
            "titulo" => "Haikyuu!! To the Top",
            "genero" => "Esportes",
            "sinopse" => "Hinata é um novato na escola e deve superar os obstáculos, como a própria altura, para se igualar ao talentoso 
            “pequeno gigante”, jogador que admira.",
            "poster" => "https://cdn.myanimelist.net/images/anime/1782/103197l.jpg?_gl=1*eouoi7*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI3NzMwOC4yLjEuMTYzMjI3ODE4OC4xMw.."
];
$anime2 = [
            "titulo" => "Demon Slayer",
            "genero" => "Sobrenatural",
            "sinopse" => "Demon Slayer: Kimetsu no Yaiba é uma série de anime japonesa baseada 
            na série mangá de mesmo título, escrita e ilustrada por Koyoharu Gotouge",
            "poster" => "https://cdn.myanimelist.net/images/anime/1286/99889l.jpg?_gl=1*x7a1nf*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI4NDc5Ny4zLjEuMTYzMjI4NTA4MC41MQ.."
];
$anime3 = [
            "titulo" => "My Hero Academia",
            "genero" => "Heróis",
            "sinopse" => "Em um mundo onde (quase) todas as pessoas possuem superpoderes, o tímido estudante Izuku Midoriya teve a infelicidade de nascer sem nenhum dom especial. 
            A partir daí, uma aventura repleta de personagens cativantes e temerosos vilões se abrem para o jovem Midoriya!!",
            "poster" => "https://cdn.myanimelist.net/images/anime/1544/115944l.jpg?_gl=1*z5v2hi*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI4NDc5Ny4zLjEuMTYzMjI4NDgyMy4zNA.."
];
$anime4 = [
            "titulo" => "One Piece",
            "genero" => "Ação e Piratas",
            "sinopse" => "One Piece é um anime que conta a história de Luffy, um pirata que está atrás de um conhecido tesouro, com o mesmo nome do anime, em busca de se tornar o próximo Rei dos Piratas.",
            "poster" => "https://cdn.myanimelist.net/images/anime/10/66965l.jpg?_gl=1*1rvqfpc*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI4NDc5Ny4zLjEuMTYzMjI4NDk4My4yOA.."
];


//$animes = [$anime1, $anime2, $anime3, $anime4];

?>



<body>
    <nav class="nav-extended teal lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>ANIMACTION</h1>
        </div>
        <div class="nav-content ">
        <ul class="tabs tabs-transparent amber darken-4">
            <li class="tab"><a class="active" href="#test1">Todos</a></li>
            <li class="tab"><a href="#test2">Assistidos</a></li>
            <li class="tab"><a href="#test3">Favoritos</a></li>
        </ul>
        </div>
    </nav>

    <div class="row">
        <?php while ($anime = $animes ->fetchArray()) :?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?=$anime["poster"]?>">
                        <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons amber darken-4">thumb_up</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?= $anime["titulo"]?></span>
                        <h6 class="card-text"><?= $anime["genero"]?></h6>
                        <p><?=$anime["sinopse"]?></p>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
    </div>

    

</body>
</html>