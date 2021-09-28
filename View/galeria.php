<?php include "cabecalho.php"?>

<?php

//session_start();
require "util\mensagem.php";

$controller  = new animeController(); 
$animes = $controller->index();
?>



<body>
    <nav class="nav-extended teal lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
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
    <div class="container">
        <div class="row">
            <?php foreach($animes as $anime) :?>
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="activator" src="<?=$anime->poster?>">
                            <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons amber darken-4">thumb_up</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator"><?= $anime->titulo?></span>
                            <h6 class="card-text"><?= $anime->genero?></h6>

                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?= $anime->titulo?><i class="material-icons right">close</i></span>
                            <p><?=$anime->sinopse?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
        </div>
    </div>
    


<?= /** Sempre que quiser mostrar a mensagem, podemos chamar esse metodo */
Mensagem::mostrar(); ?>

</body>
</html>