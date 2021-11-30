<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Categorias</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"><!--icone favicon-->
    <link rel="stylesheet" href="tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

</head>
<body>
    <header>
        <div class="logo">
            <img src="/images/Logo_point.png" alt="Logo">
        </div>
        <div class="popup" onclick="myFunction()">
            <i class="fas fa-ellipsis-v"></i>
            <div class="popuptext" id="myPopup">
                <a href=""><p>Meu perfil</p></a>
                <br>
                <a href=""><p class="exit">Sair</p></a>
            </div>
        </div>
    </header>

    <div id="menu" class="menu">
        <a href="../Principal/index.php"><p>Tela principal</p></a>
        <a href="tableProducts.php"><p>Produtos</p></a>
        <a href="tableAdmins.php"><p>Admins</p></a>
    </div>

    <h2>Categorias</h2>
    <div class="registerNew">
        <a href=""><p>Cadastrar novo <i class="fas fa-plus-circle"></i></p></a>
    </div>
    
    <div class="tableProducts">
        <table>
            <thead>
                <td style="width: 10%;">Código</td>
                <td style="width: 70%;">Nome</td>
                <td >Editar</td>
                <td >Excluir</td>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Whiskey</td>
                    <td><a href=""><i><i class="fas fa-edit"></i></i></a></td>
                    <td><a href=""><i><i class="fas fa-trash-alt"></i></i></a></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Cerveja</td>
                    <td><a href=""><i><i class="fas fa-edit"></i></i></a></td>
                    <td><a href=""><i><i class="fas fa-trash-alt"></i></i></a></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Vinho</td>
                    <td><a href=""><i><i class="fas fa-edit"></i></i></a></td>
                    <td><a href=""><i><i class="fas fa-trash-alt"></i></i></a></td>
                </tr>
            
            </tbody>

        </table>
    </div>

    <script>
        function myFunction() {
          var popup = document.getElementById("myPopup");
          popup.classList.toggle("show");
        }
    </script>
</body>
</html>