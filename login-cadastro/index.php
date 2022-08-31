<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <img src="imagem/logo.png" width="200">
    <div id="corpo_forms">
        <h1>ENTRAR</h1>
        <form method="POST" action="processa.php">
        <input type="email" placeholder="Usuário" maxlenght="30">
        <input type="password" placeholder="Senha" maxlenght="30">
        <input type="submit" value="ACESSAR" maxlenght="30">
        <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se</strong>
        </form>
        <?php
    //verificar se clicou no botão
    if(isset($_POST['nome'])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        //verificação de campo em branco
        if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){
        }
            
    }
?>
    </div>
</body>
</html>