
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

            <div class="microespacocabecalho" style="background-color: #3B4877"></div>

            <div class="cabecalho">
                <p>Exclusão > Projeto</p>
            </div>
            <br>
            <form style="background-color:#F9FBFD;">
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Questionário de encerramento de vínculo</strong></legend>
                        <br>
                        <div class="large">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="login" style="font-size: 14px">Informe o motivo:</label><br>
                                <textarea name="caixagrande" id="caixagrande" cols="5" rows="5" required></textarea>
                            </img>
                        </div>
                            <div class="microespaco"></div>

                            <p><spen class="texto-formatado">Anexe aqui arquivos comprobatórios caso seja necessário: </spen></p>
                            <input type="file">
                            <div class="microespaco"></div>
                            <div class="microespaco"></div>
                            
                            <div>
                                <input type="checkbox" id="checkbox" name="checkbox" value="delete" required><spen class="texto-formatado">Ao assinalar essa caixa, você está ciente de que ocasionará na exclusão do projeto extensionista no sistema, devendo cumprir a carga horária restante com outro projeto extensionista e com um novo cadastramento feito pelo mesmo ou outro docente-tutor</spen></img>
                            </div>
                            
                            <br>
                            <div class="centralizar">
                                <button class="btao-login"><a href="inicio-aluno.php" style="color:black">Cancelar</a></button>
                                <button class="btao-login">Confirmar</button></div>
                            </div> 
                    </fieldset>
                </form>
            </div>
        </main>
    </body>
    </html>