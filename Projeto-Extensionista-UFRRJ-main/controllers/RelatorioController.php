<?php

require_once '../models/Relatorio.php';

$relatorio = new Relatorio();
session_start();

switch ($_GET['action']) {
    case 'submeter-relatorio':
        submeterRelatorio($relatorio);
        break;
    case 'avaliar-relatorio':
        avaliarRelatorio($relatorio);
        break;
}

function submeterRelatorio($relatorio) {
    $descricao = $_REQUEST['descricao'];
    $carga_horaria = $_REQUEST['carga_horaria'];
    $projeto = $_REQUEST['projeto'];
    $aluno = $_REQUEST['aluno'];

    $relatorio->setDescricao($descricao);
    $relatorio->setCarga_horaria($carga_horaria);
    $relatorio->setProjeto($projeto);
    $relatorio->setAluno($aluno);
    $relatorio->setSituacao('aguardando');

    try {
        $relatorio->cadastrar();
        header('Location: ../submeter-aluno.php?cadastro=true');
    } catch (\Exception $e) {
        header('Location: ../submeter-aluno.php?erro_cadastro=true');
    }
}

function avaliarRelatorio($relatorio) {

    $carga_horaria_aprovada = $_REQUEST['carga_horaria_aprovada'];
    $motivo_carga_horaria_aprovada = $_REQUEST['motivo_carga_horaria_aprovada'];
    $id_relatorio = $_REQUEST['relatorio'];

    $relatorio->setCarga_horaria_aprovada($carga_horaria_aprovada);
    $relatorio->setMotivo_carga_horaria_aprovada($motivo_carga_horaria_aprovada);
    $relatorio->setId_relatorio($id_relatorio);
    $relatorio->setSituacao('avaliado');
    
    try {
        $relatorio->avaliarRelatorio();
        header('Location: ../avaliar-coordenacao.php?cadastro=true');
    } catch (\Exception $e) {
        header('Location: ../avaliar-coordenacao.php?erro_cadastro=true');
    }
}