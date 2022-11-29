<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Cadastro</title>
</head>
<body>
    
    <div class="main">
        <div class="logo">
            <h1>Butterchat<br></h1>
            <img src="../img/svg112220-ypi.png"/>
        </div>
        <form action="../Model/cadastrar.php" enctype="multipart/form-data" method="POST" id="DadosCad">
            <div class="formCad">
                <div class="card"> 
                        <h1 class="titleCad">Cadastro</h1><br>
                        <!-------<div class="erromsg">Mensagem de erro</div>-->
                        <div class="stylename" style="width: 100%;">
                            <div class="txtfield">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                            </div>
                            <div class="txtfield">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                            </div>
                        </div>
                        <div class="txtfield">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="txtfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Senha" required><br>
                            <label for="senha">Confirme sua senha</label>
                            <input type="password" name="confirmasenha" id="confirmasenha" placeholder="Confirme sua senha" required><br>
                        </div>
                        <div class="txtfield"><input type="file" name="imagem" id="imagem" required></div>
                        <br>
                        <input type="submit" class="btn-cadastrar" name="cadastro" id="cadastro" value="Registrar-se" style="font-family:Arial, Helvetica, sans-serif;">
                        <div class="link">Já possui um cadastro? <a href="FormLogin.php">Entrar</a></div>    
                </div>
            </div>
        </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>