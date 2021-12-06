<?php 

    include_once '../db/connection.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"> <!--icone favicon-->
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../images/Logo_point.png" alt="Logo">
        </div>
        <div class="main_header">
            <div class="popup" onclick="myFunction()">
                <p class="myAccount">Acessar <br> <strong>Minha conta</strong></p>
                <div class="popuptext" id="myPopup">
                    <a href="/login/login.html"><p class="toEnter">Entrar</p></a>
                    <a href=""><p class="exit">Sair</p></a>
                </div>
            </div>
            <div class="cart">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>

         <!--Responsive Navbar-->
        <div class="wrapper" id="wrapper">
            <input type="checkbox" id="btn" hidden>
            <label for="btn" class="menu-btn">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
            </label>
            <nav id="sidebar">
                <div class="title">
                  Barra de navegação
                </div>
                <ul class="list-items">
                    <li><a href="../user/login/login.php"><i class="fas fa-user"></i>Login / Cadastro</a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i>Carrinho</a></li>
                    <div class="icons">
                        <a href="https://www.linkedin.com/in/matheus-rosa-bruns-111536208/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.linkedin.com/in/carlos-eduardo-nass-66bba91b4/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.linkedin.com/in/jo%C3%A3o-guilherme-maia-/"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.linkedin.com/in/matheus-bittencourt-306a86172/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </ul>
            </nav>
        </div><!--Responsive Navbar-->
    </header>

    <div class="cart">
        <h2>Carrinho de compras</h2>
    </div>

    
    <div class="tableProducts">
        <table>
            <thead >
                <td></td>
                <td>Produto</td>
                <td>Preço</td>
                <td>Remover</td>
            </thead>
            <tbody>
                <tr>
                    <td><img src="" alt="Seu produto"></td>
                    <td>nome do produto </td>
                    <td>R$ Preço</td>
                    <td><i class="fas fa-trash"></i></td>
                </tr>
            </tbody>
        </table>
        <div class="subtotal">
            <p>Subtotal: <strong>R$ 101,00</strong></p>
        </div>
    </div>

    <div class="checkout">
        <div class="keep_buying">
            <button >Continuar Comprando</button>
        </div>
        <div class="checkout_buy">
            <button>Finalizar compra</button>
        </div>
    </div>


    <script>
        function myFunction() {
          var popup = document.getElementById("myPopup");
          popup.classList.toggle("show");
        }
    </script>
</body>
</html>