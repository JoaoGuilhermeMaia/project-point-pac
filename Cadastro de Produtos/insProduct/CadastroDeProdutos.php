<?php
    include "../db/connection.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>  
    <footer>
        <header>
            <div class="logo">
                <img src="imagem/Logo_point.png" alt="" height="70px">
            </div>
        </header>
        <h1 id="titulo">Cadastro de Produtos</h1>
  
        <form action="insProduct.php" method="POST" enctype="multipart/form-data">

            <fieldset class="group">
                <div class="campo">
                    <label for="nome"><strong>Nome do Produto:</strong></label>
                    <input type="text" name="name" id="nome">
                </div>
            </fieldset> 

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
            <button class="botao2" type="submit" onsubmit="">Voltar</button>
            </div>

            <div>
            <button class="botao3">Remover Imagem</button>
            </div>    
           
        </form>
    </footer>  
</body>
</html>