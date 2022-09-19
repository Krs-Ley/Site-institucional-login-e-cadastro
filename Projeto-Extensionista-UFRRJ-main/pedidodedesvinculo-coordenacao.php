<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !='coordenacao') {
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
    <title>Área | Coordenação</title>

    <style>
        @media screen and (max-width: 670px){
            .cabecalho{
                display: block;
            }
        }

        h1{ 
            text-align: center;
            font-family: Verdana, Arial, Helvetica, sans-serif;;
            font-size: 14px;
            color:#3B4877;
            
        }
    </style>

</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>

            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Nome: <?php echo($_SESSION['usuario']['nome']) ?></p>
                <p>Identificador: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>
        </div>

        <div class="microespacocabecalho" style="background-color: #3B4877"></div>

        <div class="cabecalho">
                <p>Pedidos > Desvínculo</p>
            </div>
            <br>
        </div>

        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Projeto</strong></legend>
                <br>
                <div class="textolarge">
                    <p><spen class="destaque"><h1>SISTEMA DE MONITORAMENTO AUTOMATIZADO</h1></spen><div class="microespaco"></div>
                    <p><spen class="destaque">Descrição:</spen> Utilização de um sistema de monitoramento capaz de controlar as condições de trabalho dos funcionários do instituto de Educação Física da UFRRJ por meio da utilização de vestíveis</p>
                    <p><spen class="destaque">Vínculo:</spen> Departamento de Educação Física da UFRRJ</p>
                    <p><spen class="destaque">Atividade desempenhada:</spen> Desenvolvimento de sistemas computacionais</p>
                    <p><spen class="destaque">Início:</spen> 25/05/2022</p>
                </div>
                <div class="microespaco"></div>

                <br><form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Informações sobre o pedido</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Data enviada: </spen>10/06/2022</p>
                            <p><spen class="destaque">Motivo: </spen>O discente solicitou desligamento do projeto por motivos pessoais
                            <p><spen class="destaque">O aluno solicitou o pedido de desligamento: </spen>Sim</p> 
                        </div>
                        <div class="microespaco"></div>

                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Discente: Ana Beatriz Soares</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen>20180013805</p>
                            <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                            <p><spen class="destaque">Período letivo atual: </spen>5ᵒ período</p>
                        </div>
                        <div class="microespaco"></div>
                    </fieldset>
                </form>
                
                <br><form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Docente: Júlia Pereira Santos</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen>12345678910</p>
                            <p><spen class="destaque">Departamento: </spen>DCOMP - Seropédica</p>
                        </div>
                        <div class="microespaco"></div>
                </fieldset>
            </fieldset>
        </form>

        </form>

        <div class="centralizar-sem-cor textobig">
            <br>
            <spen class="destaque">Aprovar desligamento do discente?</spen><br>
            <spen class="textolarge">
                <INPUT TYPE="RADIO" NAME="opcao" VALUE="s" required> Sim
                <INPUT TYPE="RADIO" NAME="opcao" VALUE="n" required> Não <br>
            </spen>
        </div>
            <br>
            
            <div class="microespaco"></div>
            <div class="centralizar">
                <button class="btao-login"><a href="inicio-coordenacao.php" style="color:black">Retornar</a></button>
                <button class="btao-login">Enviar</button></div>
            </fieldset>
        </form>
    </main>
</body>
</html>