<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] != 'professor') {
        header('Location: index.php?nao_autorizado=true');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/sigaa.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <style>
        @media screen and (max-width: 670px){
            .cabecalho{
                display: block;
            }
        }
    </style>

    <title>Área | Docente</title>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>
            
            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Nome: <?php echo ($_SESSION['usuario']['nome']) ?> </p>
                <p>Matrícula: <?php echo ($_SESSION['usuario']['matricula']) ?> </p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>

            <div class="microespacocabecalho" style="background-color: #3B4877"></div>

            <div class="cabecalho">
                <p>Desvincular > Discente</p> <!-- MAS ISSO NÃO SERIA TRABALHO DA COORDENAÇÃO? -->
            </div>
            <br>
            <form style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Informações sobre o desligamento do discente</strong></legend>
                    <br>
                    <p style="text-indent: 20px">
                        <img src="imagens/estrela.png" alt="Campo obrigatorio">
                            <spen class="texto-formatado">Discente - Projeto:</spen>
                        </img>                    
                    <select name="Selecione"> <!--MOSTRAR ALUNOS DO BANCO DE DADOS -->
                        <option value="1">Ana Beatriz Soares | Sistema de Monitoramento Automatizado</option>
                        <option value="2">João Silva Pereira | Sistema de Monitoramento Automatizado</option>
                    </select>
                    <br>
                    <div class="centralizar">
                        <button class="btao-login"><a href="inicio-professor.php" style="color:black">Cancelar</a></button>
                        <button class="btao-login">Confirmar</button></div>
                    </div> 
                    </fieldset>
                </form>
            </div>
        </main>
    </body>
    </html>