<?php
    require_once 'models/Projeto.php';
    require_once 'models/Usuario.php';
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
                <p>Nome:<?php echo($_SESSION['usuario']['nome']) ?></p>
                <p>Identificador: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>
        </div>

        <div class="microespacocabecalho" style="background-color: #3B4877"></div>

        <div class="cabecalho">
                <p>Pedidos > Cadastro</p>
            </div>
            <br>
        </div>

        <?php
            $projetoModel = new Projeto();
            $usuarioModel = new Usuario();
            $projetos = $projetoModel->buscarProjetos();
            if ($projetos) {
                foreach ($projetos as $projeto) {
                    $usuarioModel->setCpf($projeto['professor']);
                    $professor = $usuarioModel->buscarNomeProfessorPeloProjeto();
        ?>

        <form style="background-color:#F9FBFD;" action="./controllers/ProjetoController.php?action=aprovar-projeto" method="POST">
            <fieldset>
                <legend style="text-align: center;"><strong>Projeto</strong></legend>
                <br>
                <div class="textolarge">
                    <p><spen class="destaque"><h1><?php echo $projeto['nome'] ?></h1></spen><div class="microespaco"></div>
                    <p><spen class="destaque">Situação: </spen><?php echo $projeto['situacao'] ?></p>
                    <p><spen class="destaque">Data enviada: </spen><?php echo $projeto['data_inicio'] ?></p>
                    <p><spen class="destaque">Descrição:</spen> <?php echo $projeto['descricao'] ?></p>
                </div>
                <div class="microespaco"></div>
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Discente: <?php echo $projeto['aluno_nome'] ?></strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen><?php echo $projeto['aluno_matricula'] ?></p>
                        </div>
                        <div class="microespaco"></div>
                    </fieldset>
                </form>
                
                <br><form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Docente: <?php echo $professor['nome'] ?></strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen><?php echo $professor['matricula'] ?></p>
                        </div>
                        <div class="microespaco"></div>
                </fieldset>
        </form>

        <?php
                    if ($projeto['situacao'] == 'aguardando') {
        ?>

        <div class="centralizar-sem-cor textobig">
            <br>
            <spen class="destaque">Aprovar projeto?</spen><br>
            <spen class="textolarge">
                <INPUT TYPE="RADIO" NAME="situacao" VALUE="aprovado" required> Sim
                <INPUT TYPE="RADIO" NAME="situacao" VALUE="rejeitado" required> Não <br>
            </spen>
            <br>
        </div>
            <div class="large">
                    <label for="login" style="font-size: 14px">Motivo da decisão</label><br>
                    <textarea name="motivo" id="caixagrande" cols="5" rows="5" style="background-color: #F9FBFD"></textarea></div>
            <div class="microespaco"></div>
            <input type="hidden" name="projeto" value="<?php echo ($projeto['id_projeto']) ?>">
            <div class="centralizar">
                <button type="submit" class="btao-login">Enviar</button></div>
                <?php
                    }
                ?>
            </fieldset>
        </form>
        <?php
                }
            } else {
                echo("<div>Não existem projetos</div>");
            }
            if (isset($_GET['salvo']) && $_GET['salvo']) {
                echo("<div>Resultado salvo com sucesso</div>");
            }
            if (isset($_GET['erro']) && $_GET['erro']) {
                echo("<div>Ocorreu um erro ao processar a requisição</div>");
            }
        ?>
        <button class="btao-login"><a href="inicio-coordenacao.php" style="color:black">Retornar</a></button>
    </main>
</body>
</html>