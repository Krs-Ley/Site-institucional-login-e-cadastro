<!-- APAGAR ??? -->

<?php
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

        <br>
        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Projeto</strong></legend>
                
                <div class="textolarge">
                    <p><spen class="destaque"><h1>IMPLEMENTAÇÃO DE SISTEMA CADASTRAL</h1></spen><div class="microespaco"></div>
                    
                    <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p> 
                    <p><spen class="destaque">Descrição:</spen> O projeto visa resolver uma demanda relacionada à necessidade de cadastrar alunos de uma escola em um sistema, capaz de fornecer matrícula,  exibir estudantes ativos e inativos, com funções capazes de proporcionar aos usuários emitir atestado de matrícula e histórico escolar</p>
                    <p><spen class="destaque">Vínculo:</spen> Colégio Municipal do Rio de Janeiro</p>
                    <p><spen class="destaque">Início:</spen> 31/01/2022</p>
                </div>
                <div class="microespaco"></div>
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Discente: Suzana da Glória Pinheiro</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Status: </spen><spen class="destaque-aprovacao">Pendência de atribuição da carga horária no SIGAA</spen></p>
                            <p><spen class="destaque">Início no projeto: </spen> 02/02/2022</p>
                            <p><spen class="destaque">Atividade desempenhada:</spen> Desenvolvimento de site, construção de banco de dados e implementação de JavaScript</p>
                            <p><spen class="destaque">Carga horária total pendente de projetos extensionistas: </spen>0h</p>
                            <p><spen class="destaque">Matrícula: </spen>20170028790</p>
                            <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                            <p><spen class="destaque">Período letivo atual: </spen>8ᵒ período</p>
                        </div>
                        <div class="microespaco"></div>
                    </fieldset>
                </form>
                <br><form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Docente: Roger Schetinno</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen>12345678910</p>
                            <p><spen class="destaque">Departamento: </spen>DCOMP - Seropédica</p>
                        </div>
                        <div class="microespaco"></div>
                </fieldset>
                <br>
                <div class="centralizar"><button class="btao-login">Atribuir carga horária no histório escolar - SIGAA</button></div>
        </form>
            </fieldset>




        <br>
        <form style="background-color:#F9FBFD;">
            <fieldset>
                <legend style="text-align: center;"><strong>Projeto</strong></legend>
                <br>
                <div class="textolarge">
                    <p><spen class="destaque"><h1>COMPUTAÇÃO APLICADA À DIDÁTICA</h1></spen><div class="microespaco"></div>
                    <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p>    
                    <p><spen class="destaque">Descrição:</spen> O projeto visa, por meio de ferramentas como o google meet, disseminar o ensino em linguagens de programação com maior facilidade para iniciantes, como Pascal e Python, para alunos do ensino fundamental e médio</p>
                    <p><spen class="destaque">Vínculo:</spen> Comunidade no geral</p>
                    <p><spen class="destaque">Início:</spen> 28/07/2022</p>
                </div>
                <div class="microespaco"></div>
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Discente: Camillo Franzin de Camargo</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p> 
                            <p><spen class="destaque">Início no projeto: </spen> 29/07/2022</p>
                            <p><spen class="destaque">Atividade desempenhada:</spen> Ministração de aulas remotas síncronas e disponibilização de conteúdo assíncrono para os alunos</p>
                            <p><spen class="destaque">Carga horária total pendente de projetos extensionistas: </spen>256h</p>
                            <p><spen class="destaque">Matrícula: </spen>20190023710</p>
                            <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                            <p><spen class="destaque">Período letivo atual: </spen>6ᵒ período</p>
                        </div>
                        <div class="microespaco"></div>
                    </fieldset>
                </form>
                <br><form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Docente: Henrique Fonseca</strong></legend>
                        <br>
                        <div class="textolarge">
                            <p><spen class="destaque">Matrícula: </spen>12345678910</p>
                            <p><spen class="destaque">Departamento: </spen>DCOMP - Seropédica</p>
                        </div>
                        <div class="microespaco"></div>
                </fieldset>
        </form>
            </fieldset>

            <br>
            <form style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Projeto</strong></legend>
                    <br>
                    <div class="textolarge">
                        <p><spen class="destaque"><h1>SISTEMA DE MONITORAMENTO AUTOMATIZADO</h1></spen><div class="microespaco"></div>
                        <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p>    
                        <p><spen class="destaque">Descrição:</spen> Utilização de um sistema de monitoramento capaz de controlar as condições de trabalho dos funcionários do instituto de Educação Física da UFRRJ por meio da utilização de vestíveis</p>
                        <p><spen class="destaque">Vínculo:</spen> Departamento de Educação Física da UFRRJ</p>
                        <p><spen class="destaque">Início:</spen> 25/05/2022</p>
                    </div>
                    <div class="microespaco"></div>
                    <form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Discente: Ana Beatriz Soares</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p> 
                                <p><spen class="destaque">Início no projeto: </spen> 26/05/2022</p>
                                <p><spen class="destaque">Atividade desempenhada:</spen> Desenvolvimento de sistemas computacionais</p>
                                <p><spen class="destaque">Carga horária total pendente de projetos extensionistas: </spen>306h</p>
                                <p><spen class="destaque">Matrícula: </spen>20180013805</p>
                                <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                                <p><spen class="destaque">Período letivo atual: </spen>5ᵒ período</p>
                            </div>
                            <div class="microespaco"></div>
                        </fieldset>
                    </form>
                    <br><form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Docente: Júlia Pereira Santos</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Matrícula: </spen>12345678910</p>
                                <p><spen class="destaque">Departamento: </spen>DCOMP - Seropédica</p>
                            </div>
                            <div class="microespaco"></div>
                    </fieldset>
            </form>
                </fieldset>
            </form>
            
            <br>
            <form style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Projeto</strong></legend>
                    <br>
                    <div class="textolarge">
                        <p><spen class="destaque"><h1>DESENVOLVIMENTO DE APLICATIVO </h1></spen><div class="microespaco"></div>
                        <p><spen class="destaque">Status: </spen><spen class="destaque-inativo">Inativo</spen></p>
                        <p><spen class="destaque">Descrição:</spen> Utilização de um aplicativo de monitoramento capaz de controlar uma cisterna</p>
                        <p><spen class="destaque">Vínculo:</spen> Fazenda Rural Verde - Setor Privado</p>
                        <p><spen class="destaque">Início:</spen> 07/02/2022</p>
                        <p><spen class="destaque">Finalizado:</spen> 01/06/2022</p>
                    </div>
                    <div class="microespaco"></div>
                    <form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Discente: Nathan Prescott</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Status: </spen><spen class="destaque-aprovacao"><spen class="destaque-ativo"><spen class="destaque-finalizado">Concluido</spen></spen></spen></p> 
                                <p><spen class="destaque">Início no projeto: </spen> 07/02/2022</p>
                                <p><spen class="destaque">Conclusão do projeto: </spen> 01/06/2022</p>
                                <p><spen class="destaque">Contabilização da carga horária: </spen>306h concluídas</p>
                                <p><spen class="destaque">Atividade desempenhada:</spen> Desenvolvimento Mobile</p>
                                <p><spen class="destaque">Matrícula: </spen>20151214805</p>
                                <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                                <p><spen class="destaque">Período letivo vigente à época do projeto: </spen>7ᵒ período</p>
                            </div>
                            <div class="microespaco"></div>
                        </fieldset>
                    </form>
                    <br><form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Docente: Mark Jefferson</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Matrícula: </spen>12345678910</p>
                                <p><spen class="destaque">Departamento: </spen>DCOMP - Seropédica</p>
                            </div>
                            <div class="microespaco"></div>
                    </fieldset>
            </form>
                </fieldset>
            </form>

            <br>
            <form style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Projeto</strong></legend>
                    <br>
                    <div class="textolarge">
                        <p><spen class="destaque"><h1>PRINCÍPIOS DE ROBÓTICA COM ARDUÍNO E PROGRAMAÇÃO </h1></spen><div class="microespaco"></div>
                        <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p> 
                        <p><spen class="destaque">Descrição:</spen> O discente irá ministrar aulas para jovens e adultos com idade mínima de 16 anos, com o tema "robótica aplicada ao arduíno", no laboratório do PAP-SI da UFRRJ, com o objetivo de promover o conhecimento de robótica e programação</p>
                        <p><spen class="destaque">Vínculo:</spen> Comunidade no geral</p>
                        <p><spen class="destaque">Início:</spen> 03/03/2022</p>
                    </div>
                    <div class="microespaco"></div>

                    <form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Discente: Mário Silva</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Status: </spen><spen class="destaque-ativo">Ativo</spen></p>
                                <p><spen class="destaque">Início no projeto: </spen>30/03/2022</p>
                                <p><spen class="destaque">Carga horária total pendente de projetos extensionistas: </spen>231h</p>
                                <p><spen class="destaque">Atividade desempenhada:</spen> Ministração de aulas presenciais com foco em arduíno, robótica e programação</p>
                                <p><spen class="destaque">Matrícula: </spen>20140214805</p>
                                <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                                <p><spen class="destaque">Período letivo atual: </spen>3ᵒ período</p>
                            </div>
                            <div class="microespaco"></div>
                        </fieldset>
                    </form>
                    <br>
                    <form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Discente: Beatriz Lima Mendes</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Status: </spen><spen class="destaque-encerrado">Encerrado</spen></p>
                                <p><spen class="destaque">Início no projeto: </spen>03/03/2022</p>
                                <p><spen class="destaque">Desligamento do projeto: </spen>03/05/2022</p>
                                <p><spen class="destaque">O próprio aluno pediu o encerramento: </spen>Sim</p>
                                <p><spen class="destaque">Motivo do encerramento: </spen>O aluno precisou se afastar por problemas pessoais</p>
                                <p><spen class="destaque">Contabilização da carga horária: </spen>concluiu 40h | 306h previstas</p> 
                                <p><spen class="destaque">Atividade desempenhada:</spen> Ministração de aulas presenciais com foco em arduíno, robótica e programação</p>
                                <p><spen class="destaque">Matrícula: </spen>20160214805</p>
                                <p><spen class="destaque">Curso: </spen>Sistemas de Informação</p>
                                <p><spen class="destaque">Período letivo vigente à época do projeto: </spen>4ᵒ período</p>
                            </div>
                            <div class="microespaco"></div>
                        </fieldset>
                    </form>
                    
                    <br><form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Docente: Heitor Ribeiro</strong></legend>
                            <br>
                            <div class="textolarge">
                                <p><spen class="destaque">Matrícula: </spen>12345678910</p>
                                <p><spen class="destaque">Departamento: </spen>DCOMP - Seropédica</p>
                            </div>
                            <div class="microespaco"></div>
                    </fieldset>
            </form>
                </fieldset>
            </form>


            <div class="microespaco"></div>
            <button class="btao-login"><a href="inicio-coordenacao.html" style="color:black">Retornar</a></button>
        </form>
    </main>
</body>
</html>