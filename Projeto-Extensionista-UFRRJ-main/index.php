
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/sigaa.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>UFRRJ - Atividades Extensionistas</title>
    <style>
        @media screen and (max-width: 670px){
            .cabecalho{
                display: block;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>

            <!--Feito para pular linha (espaço menor que br)
                e background cor de "ouro"-->
            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>📞(21)26814610</p>
                <p>✉️assessoriaprograd@ufrrj.br</p>
                <p>🏠<a href="https://portal.ufrrj.br/" target="_blank" rel="external">Site oficial</a></p>
            </div>

            <div class="conteudo">
                <br><h1>Atividade Extensionista<br><div class="normal">(10% da carga horária)</div></h1><br>
                <p>Os alunos universitários precisarão participar de atividades de extensão como extensionistas.  Ou seja, de alguma forma, eles precisarão trabalhar em atividades de extensão de tal forma que as horas totais em atividades de extensão sejam 10% da carga horária do curso. No curso de Sistemas de Informação, por exemplo, 10% corresponde a cerca de 306h que devem ser completadas durante o curso para que  o aluno possa se formar.</p>
                <p>O aluno pode participar de diferentes atividades (ex: elaboração/ministração de curso, criação de ferramentas, prestação de serviço para empresas externas, etc.) atreladas a projetos, eventos, cursos ou programas de extensão de professores ou funcionários.</p>
                <p><a href="arquivos/projeto_extensionista.pdf" download="projeto_extensionista.pdf" type="aplication/pdf" target="_blank" rel="self">Download do arquivo</a></p></div>

                <!--Usada para dar espaço entre as partes
                    e deixar "branco" invés de tudo azul-->
                <div class="espaco"></div>
                    <!-- LOGIN -->
                <div class="login">
                    <h1>Acessar o Sistema</h1>
                <form action="./controllers/UsuarioController.php?action=logar">
                    <div class="texto">
                        <label for="login">Usuário:</label>
                        <input type="text" name="login" placeholder="Usuário" required></div>
                    
                    <div class="microespaco"></div>    
                    
                    <div class="texto">
                        <label for="senha">&nbsp Senha:</label>
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="hidden" name="action" value="logar"></div>

                    <div class="microespaco"></div><!--REDIRECIONAR APOS LOGIN-->  
                    <input type="submit" class="btao-login" value="Entrar"></input>
                
                    <?php
                        if (isset($_GET['erro_login']) && $_GET['erro_login']) {
                            echo "<div>Login inválido</div>";
                        }
                        if (isset($_GET['nao_autorizado']) && $_GET['nao_autorizado']) {
                            echo("<div>Não autorizado</div>");
                        }
                        if (isset($_GET['cadastro']) && $_GET['cadastro']) {
                            echo("<div>Usuário cadastrado com sucesso</div>");
                        }
                        if (isset($_GET['erro_cadastro']) && $_GET['erro_cadastro']) {
                            echo("<div>Ocorreu um erro ao realizar o cadastro</div>");
                        }
                    ?>    
                    </div>
                    
                    <!--FIM LOGIN-->
                    <div class="espaco"></div>
                </div>
                </form>

                <div class="cadastro">
                    <table>
                        <tr>
                            <td>
                                <br><br>
                                <b>Professor,</b> <br>
                                caso ainda não possua cadastro no sistema,<br>clique no link abaixo.<br>
                                <a href="cadastro-professor.php">
                                    <img src="imagens/docente.png" alt="Novo Usuário">
                                    <br>
                                    Cadastre-se
                                </a>
                            </td>
                            <td>
                                <br><br>
                                <b>Aluno,</b><br>caso ainda não possua cadastro no sistema, <br>clique no link abaixo.<br>
                                <a href="cadastro-aluno.php"><img src="imagens/aluno.png" alt="Novo Usuário">
                                    <br>
                                    Cadastre-se</a>
                            </td>
                            
                            <td>
                                <br><br>
                                <b>Funcionários vinculados a Coordenação,</b><br>caso ainda não possuam cadastro no sistema, <br>clique no link abaixo.<br>
                                <a href="cadastro-coordenacao.php"><img src="imagens/docente.png" alt="Novo Usuário">
                                    <br>
                                    Cadastre-se</a>
                            </td>	
                        </tr>
                    </table>
                    <br><br>
                </div>
        </div>
    </main>
   
</body>
</html>