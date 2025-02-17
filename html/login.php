<?php
include('../classe/usuario.php');
if(VerificaCookieLoginUsuario()){
    header('Location: '.'../html/pag_Perfil.php');
}

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoPalco/Style/Style_Login.css">
    
    <title>Login</title>
</head>
<body>
    <div  class="container">
        <div class="ladoEsquerdo"></div>
        <div class="ladoDireito">
            <h1>Hey artista!</h1>
            <p>Boas vindas!</p>
            <form action="../controller/login.php" method="post">
                <label for="">Email</label>
                <input type="email" name="email" id="email" required>

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha: " required>

                <a href="Possivel pagina de redefinir senha" class="Esqueceu_senha">Esqueci a senha.</a>
                <button type="submit" class="submit">Entrar</button>
            </form>
            <div class="signup">
                <p class="cadastro">Não possui conta? <a href="Cadastro.php">Fazer cadastro</a></p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="LadoEsquerdo"><img src="../Style/Imgs/Logo.png" alt="" id="img_footer"></div>
        
        <div class="LadoDireito">
          <h1>Siga nossas redes Sociais</h1>
            <a href="Insta" id="link">Instagram</a>
            <a href="youtube" id="link">Youtube</a>
            <a href="Facebook" id="link">Facebook</a>
        </div>  
    </div>
</body>
</html>';
?>