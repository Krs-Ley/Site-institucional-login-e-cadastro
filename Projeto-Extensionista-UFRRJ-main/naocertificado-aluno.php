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
    <title>Área | Discente</title>

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
            color: rgb(236, 19, 19);
            
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
                <p>Nome:  <?php echo($_SESSION['usuario']['nome']) ?></p>
                <p>Matrícula: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Curso: Sistemas de Informação - Seropédica</p>
                <div class="espacamento"></div>
            </div>
        </div>

        <div class="microespacocabecalho" style="background-color: #3B4877"></div>

        <div class="cabecalho">
                <p>Submeter Certificado > Projeto</p>
            </div>
            <br>
        </div>
        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Submeter Certificado de Conclusão do Projeto Extensionista - PEX</strong></legend>
                <br>
                <div class="textolarge">
                    <h1>ATENÇÃO</h1><div class="microespaco">
                    <p>Discente <spen class="destaque"> <?php echo($_SESSION['usuario']['nome']) ?></spen> não concluiu todas as horas previstas para finalização do projeto de extensão</p>
                    <p>Verifique a situação na aba "Meu projeto"</p>
                </div>
            </fieldset>    
        </form>
        
        <div class="microespaco"></div>
        <button class="btao-login"><a href="inicio-aluno.php" style="color:black">Retornar</a></button>
    </main>
</body>
</html>