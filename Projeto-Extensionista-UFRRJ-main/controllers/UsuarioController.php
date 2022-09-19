<?php

require_once '../models/Usuario.php';

$usuario = new Usuario();
session_start();

switch ($_GET['action']) {
    case 'cadastrar':
        cadastrar($usuario);
        break;
    case 'logar':
        logar($usuario);
        break;
    case 'deslogar':
        deslogar();
        break;
}

function cadastrar($usuario) {
    $nome = $_REQUEST['nome'];
    $matricula = $_REQUEST['matricula'];
    $cpf = $_REQUEST['cpf'];
    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];
    $tipo = $_REQUEST['tipo'];

    $usuario->setNome($nome);
    $usuario->setMatricula($matricula);
    $usuario->setCpf($cpf);
    $usuario->setLogin($login);
    $usuario->setSenha($senha);
    $usuario->setTipo($tipo);

   try {
        $usuario->cadastrar();
        header('Location: ../index.php?cadastro=true');
    } catch (\Exception $e) {
        header('Location: ../index.php?erro_cadastro=true');
    }
}

function logar($usuario) {
    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];

    $usuario->setLogin($login);
    $usuario->setSenha($senha);

    $usuario = $usuario->logar();

    if (!isset($usuario['login'])) {
        header('Location: ../index.php?erro_login=true');
        die();
    }

    $_SESSION['usuario'] = $usuario;
    if ($usuario['tipo'] == 'aluno') {
        header('Location: ../inicio-aluno.php');
    } else if ($usuario['tipo'] == 'professor') {
        header('Location: ../inicio-professor.php');
    } else if ($usuario['tipo'] == 'coordenacao') {
        header('Location: ../inicio-coordenacao.php');
    } else {
        header('Location: ../index.php?erro_login=true');
        die();
    }
}

function deslogar() {
    session_destroy();
    header('Location: ../index.php');
}