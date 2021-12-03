<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon"><!--icone favicon-->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <img src="../../images/Logo_point.png" alt="logo" height="60px">
    </header>
   
    <div class="main">
        <img src="../../images/Logo_point.png" alt="" height="80px">
        <br><br>
        <h2>Login</h2>
        <br>
        <form action="" method="post" name="formulario">
            <label for="email"><p>E-mail</p></label> 
            <input id="email" class="email" type="text" placeholder="Digite seu email" data-val="True" name="email" >
            <br><br>
            <label for="passwordClient"><p>Senha</p></label> 
            <input class="password" type="password" placeholder="Digite sua senha" id="passwordClient" name="password">
            <div class="mostrarSenha">
                <input type="checkbox" onclick="myFunction()"> <p>Mostrar senha</p>
            </div>
        </form>
        <br><br>
        <div class="botao">
            <button id="entrar" class="entrar" type="submit"  onclick="validar()">Entrar</button>
            <a href="/Principal/index.html"><button class="voltar" type="submit">Voltar</button></a>
        </div>      
        <br><br> 
        <div class="cadastro">
            <a href="../sign_up/cadastro.php"><p>Não tem conta? Cadastre-se</p></a>
        </div>
    </div>

    <script>
        function validar(){
            var email = formulario.email;
            var password = formulario.password;
            if( document.forms[0].email.value=="" 
                || document.forms[0].email.value.indexOf('@')==-1 
                || document.forms[0].email.value.indexOf('.')==-1 ) {
	            alert( "Por favor, informe um E-MAIL válido!" );
                email.focus()
	            return false;
	        }
            if(password.value == "") {
                alert("Senha não informada");
                password.focus();
                return;
            }
        }
        function myFunction() {
            var x = document.getElementById("passwordClient");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>
</body>
</html>
