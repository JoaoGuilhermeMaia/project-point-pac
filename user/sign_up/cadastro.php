<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon"><!--icone favicon-->
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>

    <header>
        <img src="../../images/Logo_point.png" alt="logo" height="60px">
    </header>
   
    <div class="main">
        <img src="../../images/Logo_point.png" alt="" height="80px">
        <br><br>
        <h2>Cadastro</h2>
        <br>
        <form action="" method="POST" id="formulario" name="formulario">
            <label for="name"><p>Nome completo</p></label>
            <input  id="name" class="name" type="text" placeholder="Digite seu nome" data-val="True" name="name">
            <br><br>
            <label for="email"> <p>E-mail</p></label>
            <input id="email" class="email" type="text" placeholder="Digite seu email" data-val="True" name="email">
            <br><br>
            <label for="password"><p>Senha</p></label> 
            <input class="password" type="password" placeholder="Digite sua senha" id="password" name="password">
            <br><br>
            <label for="confPassword"><p>Confirmar senha</p></label> 
            <input class="password" type="password" placeholder="Confirme sua senha" id="confPassword" name="confPassword">
            <div class="mostrarSenha">
                <input type="checkbox" onclick="myFunction()"> <p>Mostrar senha</p>
            </div>
            <br><br>
        </form>  
            <div class="botao">
                <button class="cadastrar" type="submit" onclick="validar()">Cadastrar</button>
                <a href="../../Principal/index.php"><button class="voltar" type="submit">Voltar</button></a>
            </div>   
         
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("password");
            var y = document.getElementById("confPassword");
            if (x.type === "password" && y.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }

        function validar(){
            var name = formulario.name;
            
            var password = formulario.password;
            var confPassword = formulario.confPassword

            if(name.value == "") {
                alert("Nome não informado");
                name.focus();
                return;
            }
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
            if(confPassword.value == "") {
                alert("Confirme sua senha!");
                confPassword.focus();
                return;
            }
            if(confPassword.value != password.value){
                alert("As Senhas não são iguais");
                confPassword.focus();
                return;
            }
        }
        
    </script>
    
</body>
</html>