<?php

$bd = new SQLite3("Animes.db");

$sql = "DROP TABLE IF EXISTS animaction";

if ($bd->exec($sql)) 
    echo "\ntabela apagada com sucesso\n";

$sql = "CREATE TABLE animaction (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        genero VARCHAR (200) NOT NULL,
        sinopse TEXT,
        poster VARCHAR (200) NOT NULL
    )
";

if ($bd->exec($sql)) 
    echo "\ntabela criada com sucesso\n"; 
else
    echo "\nFalha ao criar a tabela\n";


    $sql = "INSERT INTO animaction (id, titulo, genero, sinopse, poster) VALUES (
            0,
            'Haikyuu!! To the Top',
            'Esportes',
            'Hinata é um novato na escola e deve superar os obstáculos, como a própria altura, para se igualar ao talentoso 
            “pequeno gigante”, jogador que admira.',
            'https://cdn.myanimelist.net/images/anime/1782/103197l.jpg?_gl=1*eouoi7*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI3NzMwOC4yLjEuMTYzMjI3ODE4OC4xMw..'
        )";

if ($bd -> exec($sql))
    echo "\ninseridos com sucesso\n";
else 
    echo "\nnum deu\n";



    $sql = "INSERT INTO animaction (id, titulo, genero, sinopse, poster) VALUES (
        1,
        'Demon Slayer',
        'Sobrenatural',
        'Demon Slayer: Kimetsu no Yaiba é uma série de anime japonesa baseada 
         na série mangá de mesmo título, escrita e ilustrada por Koyoharu Gotouge',
        'https://cdn.myanimelist.net/images/anime/1286/99889l.jpg?_gl=1*x7a1nf*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI4NDc5Ny4zLjEuMTYzMjI4NTA4MC41MQ..'
    )";
    
    if ($bd -> exec($sql))
        echo "\ninseridos com sucesso\n";
    else 
        echo "\nnum deu\n";


    $sql = "INSERT INTO animaction (id, titulo, genero, sinopse, poster) VALUES (
        2,
        'My Hero Academia',
        'Heróis',
        'Em um mundo onde (quase) todas as pessoas possuem superpoderes, o tímido estudante Izuku Midoriya teve a infelicidade de nascer sem nenhum dom especial. 
         A partir daí, uma aventura repleta de personagens cativantes e temerosos vilões se abrem para o jovem Midoriya!!',
        'https://cdn.myanimelist.net/images/anime/1544/115944l.jpg?_gl=1*z5v2hi*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI4NDc5Ny4zLjEuMTYzMjI4NDgyMy4zNA..'
        )";
        
if ($bd -> exec($sql))
    echo "\ninseridos com sucesso\n";
else 
    echo "\nnum deu\n";


    $sql = "INSERT INTO animaction (id, titulo, genero, sinopse, poster) VALUES (
        3,
        'One Piece',
        'Ação e Pirataria',
        'One Piece é um anime que conta a história de Luffy, um pirata que está atrás de um conhecido tesouro, com o mesmo nome do anime, em busca de se tornar o próximo Rei dos Piratas.',
        'https://cdn.myanimelist.net/images/anime/10/66965l.jpg?_gl=1*1rvqfpc*_ga*MTQzNDU0ODY4Ni4xNjMxOTc2MjYx*_ga_26FEP9527K*MTYzMjI4NDc5Ny4zLjEuMTYzMjI4NDk4My4yOA..'
        )";

if ($bd -> exec($sql))
    echo "\ninseridos com sucesso\n";
else 
    echo "\nnum deu\n";
?>

