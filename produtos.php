<?php  

include('conexao.php');
include "menu.php";

$sql = "select * from tblavaliacao";
$qry = mysqli_query($con,$sql);
$produto = $qry;



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-info">
  <div class="container">
    <h1>Produtos Cadastrados</h1>
</div>
</nav>
<hr>
</html>
<div class="container">
    <a href="frmprodutos.php" class="btn btn-primary">Novo</a>
    <table class="table table-success table-striped table-hover">

    <?php

echo "<tr>";
echo "<td>produto</td>";
echo "<td>preco</td>";
echo "<td>estoque</td>";
echo "<td>foto</td>";
echo   "<td>açoes</td>";


echo "<tr>";
while ($linha = mysqli_fetch_array($qry)){
echo "<tr>";
echo "<td>{$linha['produto']}</td>";
echo "<td>{$linha['preco']}</td>";
echo "<td>{$linha['estoque']}</td>";
echo "<td><img src='{$linha['foto']}' width='110px' height='130px'></td>";

  
echo "<tr>";
}
echo "</table>";
?>
