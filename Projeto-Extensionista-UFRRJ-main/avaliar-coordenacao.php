<?php
    require_once 'models/Projeto.php';
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] != 'coordenacao') {
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
                <p>Nome: <?php echo ($_SESSION ['usuario']['nome'])?> ></p>
                <p>Matrícula: <?php echo ( $_SESSION ['usuario'] ['matricula']) ?></p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>
        </div>

        <div class="microespacocabecalho" style="background-color: #3B4877"></div>

        <div class="cabecalho">
                <p>Avaliar > Projeto</p>
            </div>
            <br>
        </div>

        <?php 
        
            $projetoModel = new Projeto();
            $projetos = $projetoModel->buscarRelatoriosComProjetos();
            if ($projetos) {
                foreach ($projetos as $projeto) {
        ?>

        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Projeto</strong></legend>
                <br>
                <div class="textolarge">
                    <p><spen class="destaque"><h1><?php echo $projeto['nome'] ?></h1></spen><div class="microespaco"></div>
                    <p><spen class="destaque">Descrição:</spen> <?php echo $projeto['descricao'] ?></p>
                    <p><spen class="destaque">Data:</spen> <?php echo $projeto['data_inicio'] ?></p>
                </div>
                <div class="microespaco"></div>
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Discente: <?php echo $projeto['nome_aluno'] ?></strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen><?php echo $projeto['matricula'] ?></p>
                        </div>
                        <div class="microespaco"></div>
                    </fieldset>
                </form>
                <br><form style="background-color:#F9FBFD;">
                    
        </form>
        <br>
        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Relatório</strong></legend>
                <br>
                <div class="textolarge">
                   <!-- Remover --> <p><spen class="destaque"><h1>Data de envio: <?php echo $projeto['data_envio'] ?></h1></spen><div class="microespaco"></div>
                    <p><spen class="destaque">Carga Horária total pretendida: </spen><?php echo $projeto['carga_horaria'] ?></p>
                    <p><spen class="destaque">Resumo das atividades exercidas: </spen><ul>
                        <?php echo $projeto['relatorio_descricao'] ?>
                    </ul></p>
                </div>
                <div class="microespaco"></div>
            </fieldset>
        </form>
            </fieldset>
        </form>
        <br>
        <form style="background-color:#F9FBFD;" action="./controllers/RelatorioController.php?action=avaliar-relatorio" method="POST">
            <fieldset>
                <legend style="text-align: center; background-color: #FFFFE4;"><strong>Área de avaliação da coordenação</strong></legend>
                <br>
                <div class="inputbox">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="matricula">Horas contabilizadas:</label>
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="matricula" name="carga_horaria_aprovada" class="input_user" maxlength="3" required>
                        </img>
                    </div>
                    <div class="microespaco"></div>
                
                <div class="large">
                <img src="imagens/estrela.png" alt="Campo obrigatório">
                    <label for="login" style="font-size: 14px">Informe o processo de contabilização das horas:</label><br>
                    <textarea name="motivo_carga_horaria_aprovada" id="caixagrande" cols="5" rows="5" required></textarea>
                </img>
                <input type="hidden" value="<?php echo $projeto['id_relatorio'] ?>" name="relatorio">
            </div>   
            <div class="microespaco"></div>
            <div class="centralizar">
                <button type="submit" class="btao-login">Confirmar</button></div>
            </fieldset>
        </form>
        <?php
                }
            } else {
                echo("<div>Não existem relatórios para avaliar</div>");
            }
        ?>
        <button class="btao-login"><a href="inicio-coordenacao.php" style="color:black">Retornar</a></button>
    </main>
</body>
</html>