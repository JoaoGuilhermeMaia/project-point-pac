<?php 

    include_once ('../db/connection.php');


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
            <a href="../index.php">
                <img src="../images/Logo_point.png" alt="Logo">
            </a>

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

    <?php

    if(!isset($_SESSION['itens'])){
        $_SESSION['itens'] = array();
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho"){
        /*Adiciona ao carrinho*/
        $id = $_GET['category_id'];
        if (!isset($_SESSION['itens'][$id])){
            $_SESSION['itens'][$id] = 1;            
        }else{
            $_SESSION['itens'] [$id] += 1;
        }
    }
    if (count($_SESSION['itens']) == 0){
        echo'Carrinho Vazio <br><a href"../index.php">Adicionar itens</a>';
    }else{
        foreach($_SESSION['itens'] as $id => $quantidade)
        {
            $sql = "SELECT * FROM products";
            $stm_sql = $db_connection->prepare($sql);
            $stm_sql->execute();
            $products = $stm_sql->fetchAll(PDO::FETCH_ASSOC);
            
            echo'<div class="tableProducts">';
                echo'<table>';
                    echo'<thead>
                            <td></td>
                            <td>Produto</td>
                            <td>Preço</td>
                            <td>Remover</td>
                        </thead>';
                    echo'<tbody>';
                        echo'<tr>';
                            echo'<td><img src="'.$products[0]['image'].'" alt="Seu produto"></td>';
                            echo'<td>'.$products[0]['name'].'</td>';
                            echo'<td>R$ </td>';
                            echo'<td><i class="fas fa-trash"></i></td>';
                        echo'</tr>';
                    echo'</tbody>';
                echo'</table>';
                echo'<div class="subtotal">
                    <p>Subtotal: <strong>R$ 101,00</strong></p>
                </div>';
        echo'</div>';
        }
    }
    
    ?>
    

    <div class="checkout">
        <div class="keep_buying">
            <a href="../index.php"><button >Continuar Comprando</button></a>
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