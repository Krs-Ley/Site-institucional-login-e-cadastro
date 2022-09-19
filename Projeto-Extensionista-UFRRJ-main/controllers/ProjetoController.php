<?php

require_once '../models/Projeto.php';

$projeto = new Projeto();
session_start();

switch ($_GET['action']) {
    case 'cadastrar':
        cadastrar($projeto);
        break;
    case 'aprovar-projeto':
        aprovarProjeto($projeto);
        break;
}

function cadastrar($projeto) {
    $nome = $_REQUEST['nome'];
    $aluno = $_REQUEST['aluno'];
    $descricao = $_REQUEST['descricao'];
    $professor = $_SESSION['usuario']['cpf'];
    $situacao = "aguardando";

    $projeto->setNome($nome);
    $projeto->setAluno($aluno);
    $projeto->setDescricao($descricao);
    $projeto->setProfessor($professor);
    $projeto->setSituacao($situacao);

   try {
        $projeto->cadastrar();
        header('Location: ../inicio-professor.php?cadastro=true');
    } catch (\Exception $e) {
        header('Location: ../inicio-professor.php?erro_cadastro=true');
    }
}

function aprovarProjeto($projeto) {
    $situacao = $_REQUEST['situacao'];
    $motivo = $_REQUEST['motivo'];
    $id = $_REQUEST['projeto'];

    $projeto->setSituacao($situacao);
    $projeto->setMotivoSituacao($motivo);
    $projeto->setIdProjeto($id);

    try {
        $projeto->definirSituacao();
        header('Location: ../pedidocadastro-coordenacao.php?salvo=true');
    } catch (\Exception $e) {
        header('Location: ../pedidocadastro-coordenacao.php?erro=true');
    }
}