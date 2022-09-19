<?php
    require_once 'models/Projeto.php';
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
    <title>Área | Docente</title>

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
                <p>Matrícula: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>
        </div>

        <div class="microespacocabecalho" style="background-color: #3B4877"></div>

        <div class="cabecalho">
                <p>Visualização > Projeto</p>
            </div>
            <br>
        </div>

        <?php
            $projetoModel = new Projeto();
            $projetoModel->setProfessor($_SESSION['usuario']['cpf']);
            $projetos = $projetoModel->buscarProjetosDoProfessor();
            if ($projetos) {
                foreach ($projetos as $projeto) {
        ?>
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong><?php echo($projeto['nome']) ?></strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Discente: </spen><ul>
                                <li><?php echo($projeto['nome_aluno']) ?></li>
                            </ul>
                        </p>
                            <p><spen class="destaque">Status: </spen><?php echo($projeto['situacao']) ?></p>
                            <p><spen class="destaque">Descrição:</spen><?php echo($projeto['descricao']) ?></p>
                            <p><spen class="destaque">Início:</spen><?php echo($projeto['data_inicio']) ?></p>
                        </div>
                        <div class="microespaco"></div>
                    </fieldset>
                </form>
            <br>
        <?php
                }
            }
        ?>
        <div class="microespaco"></div>
        <button class="btao-login"><a href="inicio-professor.php" style="color:black">Retornar</a></button>
    </main>
</body>
</html>