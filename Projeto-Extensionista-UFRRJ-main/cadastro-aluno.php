<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/sigaa.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Cadastro | Aluno</title>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>

            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Cadastro> Discente</p>
            </div>
            <br>
            <form id="form" style="background-color:#F9FBFD;" action="./controllers/UsuarioController.php?action=cadastrar" method="POST">
                <fieldset>
                    <legend style="text-align: center;"><strong>Dados cadastrais</strong></legend><br>
                    
                    <div class="normal" style="text-indent: 106px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="nome">Nome completo:</label>
                            <input type="text" name="nome" id="nome" class="input_user" oninput="validaNome(0)" maxlength="80" minlength="6" required>
                        </img>
                        <span class="textoAviso">Deve conter no mínimo 6 caracteres e máximo 80</span>
                    </div>
                    <div class="microespaco input_user"></div>
 
                    <div class="inputbox" style="text-indent: 152px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="matricula">Matrícula:</label>
                            <input type="text" onkeypress="return onlynumber()" name="matricula" id="matricula" class="input_user" oninput="valida11Digitos(2)" maxlength="11" minlength="11" required>
                            <span class="textoAviso">Deve conter 11 números</span>  
                        </img>
                    </div>
                   
                    <div class="microespaco"></div>

                    <div class="inputbox" style="text-indent: 189px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="cpf" id="numero11">CPF:</label>
                            <input type="text" onkeypress="return onlynumber()" name="cpf" id="cpf" class="input_user" oninput="valida11Digitos(3)" maxlength="11" minlength="11" minlength required>
                            <span class="textoAviso">Deve conter 11 números</span>
                        </img>
                    </div>
                    <div class="microespaco"></div>

                    <div class="inputbox" style="text-indent: 177px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="nome_usuario">Login:</label>
                            <input type="text" name="login" id="login" class="input_user" oninput="validatePassword(4)"maxlenght="35" minlength="4" required>
                            <span class="textoAviso">Deve conter no mínimo 4 caracteres e máximo 35</span> 
                        </img>
                    </div>
                    <div class="microespaco"></div>
                    <div class="inputbox" style="text-indent: 171px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="input_user" minlength="4" maxlength="35" oninput="validatePassword(5)" required>
                            <span class="textoAviso">Deve conter no mínimo 4 caracteres e máximo 35</span>
                        </img>
                    </div>
                    <div class="microespaco"></div>
                    <div class="inputbox" style="text-indent: 122px">
                        <img src="imagens/estrela.png" alt="Campo obrigatório">
                            <label for="senha">Repita Senha:</label>
                            <input type="password" name="senha" id="senha" class="input_user" oninput="comparaSenha(5)" minlength="4" maxlength="35" required>
                            <input type="hidden" name="tipo" value="aluno">
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