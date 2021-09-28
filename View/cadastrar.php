<?php 
    include "cabecalho.php"
?>

<body>
    <nav class="nav-extended teal lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav.header center">
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
        <form method="POST">
            <div class="col s6 offset-s3">
                <div class="card teal lighten-4">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Anime</span>

                        <!-- input Titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">dvr</i>
                                    <input id="titulo" type="text" class="validate" name="titulo" required>
                                    <label for="titulo">TITULO DO ANIME</label>
                            </div>
                        </div>

                        <!-- input genero -->
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">remove_red_eye</i>
                                <input id="genero" type="text" class="validate" name ="genero" required>
                                <label for="genero">GENERO</label>
                            </div>
                        </div>

                        <!-- input sinopse -->
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">airplay</i>
                                    <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="genero">SINOPSE</label>
                            </div>
                        </div>

                        <!-- input capa -->
                        <div class ="file-field input field">
                            <div class="btn black-text">
                                <span>Capa</span>
                                <input type="file">
                            </div>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="poster">
                        </div>


                        <div class="card-action">
                            <a class="btn waves-effect waves-lightwaves-effect waves-light" href="galeria.php">Cancelar</a>
                            <button type="submit" class="waves-effect waves-light btn amber
                             darken-4">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>