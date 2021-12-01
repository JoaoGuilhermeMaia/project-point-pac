<?php
    include "../../db/connection.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon"><!--icone favicon-->
    <link rel="stylesheet" href="cadastroProduto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>

<body>  
    <footer>
        <h1 id="titulo">Cadastro de Produtos</h1>
  
        <form action="insProduct.php" method="POST" enctype="multipart/form-data">

            <fieldset class="group">
                <div class="campo">
                    <label for="nome"><strong>Nome do Produto:</strong></label>
                    <input type="text" name="name" id="nome">
                </div>
            </fieldset> 

            <div>
                <label for="categories"><strong>Categoria</strong></label>
                <select name="categories">
                    <?php
                        $sql = "SELECT * FROM categories";

                        $stm_sql = $db_connection->prepare($sql);
                        $stm_sql->execute();
  
                        $categories = $stm_sql->fetchAll(PDO::FETCH_ASSOC);

                        foreach($categories as $category){
                            echo "<option value='".$category['id_category']."'>".$category['name']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="campo">
                <br>
                <label for="Descriçao"><strong>Descrição:</strong></label>
                <textarea rows="8" style="width: 20em" id="experiencia" name="desc"></textarea>
            </div>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="valor"><strong>Valor do Produto:</strong></label>
                    <input type="number" name="value-product" id="valor">
                </div>
            </fieldset> 

            <div class="anexo">
                <input type="file" name="image" multiple="file">
            </div>

            <div>
            <button class="botao1" type="submit" onsubmit="">Cadastrar</button>
            </div>

            <div>
            <button class="botao2" >Voltar</button>
            </div>

            <div>
            <button class="botao3">Remover Imagem</button>
            </div>    
           
        </form>
    </footer>  






    <header>
        <div class="logo">
            <img src="../../images/Logo_point.png" alt="Logo">
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

    <div class="main_product">
        <div class="registration_product">
            <h2>Cadastro de Produto</h2>
        </div>
        <div class="center_product">
            <div class="name_product">
                <label for="nome"><strong>Nome do Produto:</strong></label>
                <input type="text" name="name" id="nome">
            </div>
            <div class="input_img">
                <i class="fas fa-file-upload"></i>
                <div class="file_selection">
                    <label for='arquivo'>Selecionar um arquivo &#187;</label>
                    <input name="imageCategory" type="file" id="arquivo" onchange="return validarArquivo()">  
                </div>            
            </div>  
        </div>
    </div>





    <form action="insProduct.php" method="POST" enctype="multipart/form-data">
    
    </form>






    <script>
        function myFunction() {
          var popup = document.getElementById("myPopup");
          popup.classList.toggle("show");
        }
    </script>
    
</body>
</html>