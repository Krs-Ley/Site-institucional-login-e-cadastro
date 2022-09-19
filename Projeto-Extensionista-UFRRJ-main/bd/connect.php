<?php

function conectaBd(){
    try{
    $conexao = new \PDO("mysql:host=localhost;dbname=login_projeto_web1","root","");
    return $conexao;

    }catch(\PDOException $e){
        echo "Não foi possível estabelecer a conexão com o banco de dados, erro: ".$e->getCode();
    }
}
?>