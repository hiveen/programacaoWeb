<?php  
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "casatech";

  $conect = mysqli_connect($host, $user, $pass, $db); 
  mysqli_select_db($conect, $db);

  $nome_produto = $_REQUEST['nome_produto'];
  $descricao_produto = $_REQUEST['descricao_produto'];
  $valor_produto = $_REQUEST['valor_produto'];
  $fornecedor_produto = $_REQUEST['fornecedor_produto'];

  $sql = "INSERT INTO tb_produtos (NomeProduto, DescricaoProduto, ValorProduto, FornecedorProduto) VALUES ('$nome_produto', '$descricao_produto', '$valor_produto', '$fornecedor_produto')";

  $query = mysqli_query($conect, $sql);
?>