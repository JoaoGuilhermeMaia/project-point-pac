<?php

    include_once("../db/connection.php");

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"> <!--icone favicon-->
    <link rel="stylesheet" href="productScreen.css">
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
                    <a href="../user/login/login.php"><p class="toEnter">Entrar</p></a>
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
                    <li><a href="../user//login//login.php"><i class="fas fa-user"></i>Login / Cadastro</a></li>
                    <li><a href="/Carrinho/carrinho.php"><i class="fas fa-shopping-cart"></i>Carrinho</a></li>
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


    <div class="main_productScreen">
        <?php      
        $sql = "SELECT * FROM products WHERE category_id=$id";
        $stm_sql = $db_connection->prepare($sql);
        $stm_sql->execute();
        $products = $stm_sql->fetchAll(PDO::FETCH_ASSOC);

        if (count($products) > 0) {
            foreach ($products as $product) {
            echo'<div class="productImage">
                    <img src="../Cadastro de Produtos/imagem/image'.$product['image'].'" alt="'.$product['name'].'">
                </div>';
            echo'<div class="right_product">';
                    echo'<div class="productName"><h2>'.$product["name"].'</h2></div>';
                echo'<div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>';
                echo'<div class="productPrice"> <h2>R$' .$product["value"].'</h2> </div>';
                echo'<div class="addToCart">
                        <button name="addToCart">Adicionar ao <i class="fas fa-shopping-cart"></i> </button>
                    </div>';
                echo'<div class="productDescription"> <p>'.$product["description"].'</p> </div>';
            echo'</div>';
            }
        }
        ?>
    </div>


    <footer>
        <div class="mainFooter">
            <div class="social">
                <h2>Siga-nos</h2>
                <a href="#"><i class="fab fa-instagram" id="insta"></i></a>
                <a href="#"><i class="fab fa-facebook-square" id="face"></i></a>
            </div>
            <div class="location">
                <h2>Localização: </h2>
                <p>Estamos localizados na Rua Senador Felipe Schmidt, 308 - Centro <br>Joinville - SC</p>
            </div>
            <div class="team">
                <h2>Time: </h2>
                <p>Matheus Bruns</p>
                <p>Carlos Nass</p>
                <p>João Maia</p>
                <p>Matheus Bittencourt</p>
            </div>
        </div>
    </footer>

    <script>
        function myFunction() {
          var popup = document.getElementById("myPopup");
          popup.classList.toggle("show");
        }
    </script>
</body>
</html>