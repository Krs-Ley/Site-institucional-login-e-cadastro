<?php
    require_once 'models/Projeto.php';
    session_start();
    if(!isset ($_SESSION['usuario']) || $_SESSION ['usuario']['tipo'] != 'aluno')
    {
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
                <p>Cadastro > Relatório</p>
            </div>
        <br>

        <?php 
        
            $projetoModel = new Projeto();
            $projetoModel->setAluno($_SESSION['usuario']['cpf']);
            $projeto = $projetoModel->buscarProjetoDoAluno();
            if ($projeto) {
        ?>

        <form style="background-color:#F9FBFD;" action="./controllers/RelatorioController.php?action=submeter-relatorio" method="POST">
            <fieldset>
                <legend style="text-align: center;"><strong>Enviar relatório</strong></legend>
                <br>

                <div class="large">
                    <img src="imagens/estrela.png" alt="Campo obrigatório">
                        <label for="login" style="font-size: 14px">Sintetize as principais atividades desenvolvidas e a carga horária de cada atividade:</label><br>
                        <textarea name="descricao" id="caixagrande" cols="5" rows="5" required></textarea>
                    </img>
                </div>
                    <div class="microespaco"></div>

                    <br>

                    <div class="inputbox">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="matricula">Carga horária total do mês: </label>
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="carga_horaria" name="carga_horaria" class="input_user" maxlength="3" required>
                        </img>
                    </div>
                    <input type="hidden" value="<?php echo $projeto['id_projeto'] ?>" name="projeto">
                    <input type="hidden" value="<?php echo $_SESSION['usuario']['cpf'] ?>" name="aluno">
                    <div class="microespaco"></div> 

                <div class="centralizar">
                    <button type="submit" class="btao-login">Confirmar</button></div>
                    
                    <div class="microespaco"></div> 
                    
                </div> 
            </fieldset>
        </form>

        <?php
            } else {
                echo("<div>Não existe projeto vinculado ao aluno</div>");
            } 
            if (isset($_GET['cadastro']) && $_GET['cadastro']) {
                echo("<div>Relatório salvo com sucesso</div>");
            }
            if (isset($_GET['erro_cadastro']) && $_GET['erro_cadastro']) {
                echo("<div>Ocorreu um erro ao salvar o relatório</div>");
            }
        ?>
        <button class="btao-login"><a href="inicio-aluno.php" style="color:black">Cancelar</a></button>
            </div>
        </main>
    </body>
    </html>