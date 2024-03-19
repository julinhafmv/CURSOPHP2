<?php

include_once("db.php");
include_once("class/funcionarios.php");
include_once("class/autor.php");
include_once("class/cliente.php");
include_once("class/livros.php");
include_once("class/emprestimo.php");
include_once("class/repository/repository.php");
include_once("class/repository/autor.repository.php");

class Factory {
    public static function db (){
        return DB::getInstance();
    }
    
    public static function funcionario (){
        return new Funcionario();
    }
}


?>