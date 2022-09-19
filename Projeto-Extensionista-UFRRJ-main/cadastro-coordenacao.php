<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/sigaa.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Cadastro | Coordenação</title>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>

            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Cadastro > Funcionário da Coordenação</p>
            </div>
            <br>
            <form id="form" style="background-color:#F9FBFD;"action="./controllers/UsuarioController.php?action=cadastrar" method="POST">
                <fieldset>
                    <legend style="text-align: center;"><strong>Dados cadastrais</strong></legend><br>

                    <div class="normal" style="text-indent: 88px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="nome">Nome completo:</label>
                            <input type="text" name="nome" id="nome" class="input_user" minlength="6" maxlength="80" oninput="validaNome(0)" required>
                            <span class="textoAviso">Deve conter no mínimo 6 caracteres e máximo 80</span>
                        </img>
                    </div>
                    <div class="microespaco input_user"></div>
                

                    <div class="inputbox"> 
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="matricula">Matrícula ou identificador:</label>
                            <input type="text" name="matricula" onkeypress="return onlynumber()" oninput="valida11Digitos(2)" id="matricula" class="input_user"  minlength="11" maxlength="11"required>
                            <span class="textoAviso">Deve conter 11 números</span>
                        </img>
                    </div>
                    <div class="microespaco"></div>
                    
                    <div class="inputbox" style="text-indent: 172px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="cpf" >CPF:</label>
                            <input type="text" name="cpf" onkeypress="return onlynumber()" oninput="valida11Digitos(3)" id="cpf" class="input_user" minlength="11" maxlength="11" required>
                            <span class="textoAviso">Deve conter 11 números</span>
                        </img>
                    </div>
                    <div class="microespaco"></div>

                    <div class="inputbox" style="text-indent: 160px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="login">Login:</label>
                            <input type="text" name="login" id="login" class="input_user" minlength="4" maxlength="35" oninput="validatePassword(4)" required> 
                            <span class="textoAviso">Deve conter no mínimo 4 caracteres e máximo 35</span>
                        </img>
                    </div>
                    <div class="microespaco"></div>
                    <div class="inputbox" style="text-indent: 154px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="input_user" oninput="validatePassword(5)" minlength="4" maxlength="35" required>
                            <span class="textoAviso">Deve conter no mínimo 4 caracteres e máximo 35</span>
                        </img>
                    </div>
                    <div class="microespaco"></div>

                    <div class="inputbox" style="text-indent: 122px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="senha">Repita Senha:</label>
                            <input type="password" name="senha" id="senha" class="input_user" oninput="comparaSenha(5)" minlength="4" maxlength="35" required>
                            <input type="hidden" name="tipo" value="coordenacao">
                        </img>
                    </div>
                    <div class="microespaco"></div>
                    <div class="centralizar">
                    <button class="btao-login"><a href="index.php" style="color:black">Cancelar</a></button>
                    <button type="submit" id="submitButton" class="btao-login">Cadastrar</button></div>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>