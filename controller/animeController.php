<?php

session_start();
require "repository\AnimesRepositoryPDO";
require "model\Anime.php";

class animeController{
    public function index(){
        $AnimesRepository = new AnimesRepositoryPDO();
        return $AnimesRepository->listarTodos();
    }


    public function save($request){
        
        $AnimesRpository = new AnimesRepositoryPDO();
        $anime = new Anime();


        $anime->titulo     =  $request["titulo"];
        $anime->genero     =  $request["genero"];
        $anime->sinopse    =  $request["sinopse"];
        $anime->poster     =  $request["poster"];


        if ($AnimesRpository->salvar($anime))
            $_SESSION["msg"] = "Anime cadastrado com sucesso";
        else 
            $_SESSION["msg"] = "Erro ao cadastrar filme";

        header("Location: /");

    }
     
}

?>