<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Produtos</title>
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
        <a href="tableCategories.php"><p>Categorias</p></a>
        <a href="tableAdmins.php"><p>Admins</p></a>
    </div>

    <h2>Produtos</h2>
    <div class="registerNew">
            <a href=""><p>Cadastrar novo <i class="fas fa-plus-circle"></i></p></a>
    </div>
    <div class="tableProducts">
        <table>
            <thead>
                <td style="width: 25%;">Nome</td>
                <td style="width: 25%;">Categoria</td>
                <td style="width: 25%;">Preço</td>
                <td >Editar</td>
                <td >Excluir</td>
            </thead>
            <tbody>
                <tr>
                    <td>Whiskey Johnnie Walker Red Label</td>
                    <td>Whiskey</td>
                    <td>R$ 129,90</td>
                    <td><a href=""><i class="fas fa-edit"></i></a></td>
                    <td><a href=""><i class="fas fa-trash-alt"></i></a></td>
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