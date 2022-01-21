<?php  

include('conexao.php');
include "menu.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
<div class="container">
    <h1>Cadastro de Produtos</h1>
</div>
  </nav>  
  <div class="container-fluid">
  <h1></h1>
  <nav class="navbar navbar-dark bg-info">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Produto <input type="text" name="produto">
    Preço <input type="text" name="preco">
    Estoque <input type="text" name="estoque">
    Foto <input type="file" name="fileToUpload" id="fileToUpload">
    </nav>  
    <h1></h1>
    <button type="button" class="Blue=#4682B4">
    <input type="submit" value="Cadastrar">
    </button>

    </form>
    <h1></h1>
     <a href="produtos.php" class="btn btn-primary">volta</a>
     </div>
</body>
</html>