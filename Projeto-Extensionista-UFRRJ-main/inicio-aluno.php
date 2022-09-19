<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !='aluno') {
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
        .destaque_mouse:hover{
            background-color: #FFFFE4;
        }

        @media screen and (max-width: 670px){
            .cabecalho{
                display: block;
            }
        }
    </style>

    <title>Área | Discente</title>
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
                <p>Matrícula: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Curso: Sistemas de Informação - Seropédica</p>
                <div class="espacamento"></div>
            </div>

                <div class="cadastro_projeto">
                <table>
                    <tr>
                        <td style="background-color: #EFF3FA;">
                            <a href="submeter-aluno.php">
                                <div class="destaque_mouse">
                                    Submeter relatório<br><br>
                                    <img src="imagens/mais.png" alt="Pedidos de cadastro de projetos"><br>
                                </div>
                            </a>
                        </td>

                        <td style="background-color: #EFF3FA;">
                            <a href="visualizarprojeto-aluno.php">
                                <div class="destaque_mouse">
                                Meu projeto<br><br>
                                    <img src="imagens/papel.png"Avaliar relatório de discentes"><br>
                                </div>
                            </a>
                        </td>
                    </tr>
                </table>
                <br><button class="btao-login"><a href="./controllers/UsuarioController.php?action=deslogar" style="color:black">Encerrar Login</a></button>
            </div>
        </div>
    </main>
</body>
</html>