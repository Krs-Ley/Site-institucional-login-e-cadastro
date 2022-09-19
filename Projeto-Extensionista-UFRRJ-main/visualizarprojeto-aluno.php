<?php
    require_once 'models/Projeto.php';
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
                <p>Nome:<?php echo ($_SESSION ['usuario']['nome']) ?></p>
                <p>Matrícula: <?php echo ($_SESSION ['usuario']['matricula']) ?></p>
                <p>Curso: Sistemas de Informação - Seropédica</p>
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
            $projetoModel->setAluno($_SESSION['usuario']['cpf']);
            $projeto = $projetoModel->buscarProjetoDoAluno();
            if ($projeto) {
        ?>

        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Projeto: <?php echo ($projeto['nome_professor']) ?></strong></legend>
                <br>
                <div class="textolarge">
                    <p><spen class="destaque"><h1><?php echo ($projeto['nome']) ?></h1></spen><div class="microespaco"></div>
                    <p><spen class="destaque">Descrição:</spen> <?php echo ($projeto['descricao']) ?></p>
                    <p><spen class="destaque">Data Início:</spen> <?php echo ($projeto['data_inicio']) ?></p>
                </div>
                <div class="microespaco"></div>
            </fieldset>
        </form>
        <br>
        <!-- <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Relação de relatórios</strong></legend>
                <br>
                <div class="textolarge">
                    <p><spen class="destaque">Carga horária considerada: </spen>36h | 40h totais (36h = hora que o aluno colocou no campo) (40h = hora que a coordenação atribuiu) </p>
                </div>
                <div class="microespaco"></div>
            </fieldset>
        </form> -->
        <?php
            } else {
                echo("<div>Não existe projeto vinculado ao aluno</div>");
            }
        ?>
        <div class="microespaco"></div>
        <button class="btao-login"><a href="inicio-aluno.php" style="color:black">Retornar</a></button>
        <br>
    </main>
</body>
</html>