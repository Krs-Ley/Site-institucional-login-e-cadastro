<?php
    require_once 'models/Usuario.php';
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
                <p>Nome: <?php echo($_SESSION['usuario']['nome']) ?></p>
                <p>Matrícula: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>

            <div class="microespacocabecalho" style="background-color: #3B4877"></div>

            <div class="cabecalho">
                <p>Cadastro > Projeto</p>
            </div>
            <form style="background-color:#F9FBFD;" action="./controllers/ProjetoController.php?action=cadastrar" method="POST">
                <br><br>
                    <form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Dados do projeto</strong></legend>
                        <br>   
                        <div class="large" style="text-indent: 49px;">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="login" style="font-size: 14px">Nome do projeto:</label>
                                <input type="text" name="nome" id="nome" class="input_user" required>
                            </img>
                        </div>
                        <div class="microespaco"></div>

                        <div class="large" style="text-indent: 118px;">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="login" style="font-size: 14px">Víncular aluno:</label>
                                <select name="aluno">
                                    <?php
                                        $usuario = new Usuario();
                                        $alunos = $usuario->buscarAlunosCriarProjeto();
                                        if ($alunos) {
                                            foreach ($alunos as $aluno) {
                                    ?>
                                        <option value="<?php echo $aluno['cpf'] ?>"><?php echo $aluno['nome'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </img>
                        </div>
                        <div class="microespaco"></div>
                        
                        <div class="large">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="login" style="font-size: 14px">Descrição do projeto:</label><br>
                                <textarea name="descricao" id="caixagrande" cols="5" rows="5"></textarea>
                            </img>
                        </div>

                        <div class="microespaco"></div><div class="microespaco"></div>
                        
                        <div class="centralizar">
                            <button class="btao-login"><a href="inicio-professor.php" style="color:black">Cancelar</a></button>
                            <button type="submit" class="btao-login">Cadastrar</button></div>
                    </form>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>