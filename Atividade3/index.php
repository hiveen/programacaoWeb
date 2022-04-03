<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Casa da Tecnologia</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style type="text/css">
      h1 {
        text-align:center;
      }
    </style>
    <script>
      function Cadastro()  {
        var nome_produto =  document.getElementById("pname").value;
        var descricao_produto =  document.getElementById("pdesc").value;
        var valor_produto =  document.getElementById("pvalor").value;
        var fornecedor_produto =  document.getElementById("pfornecedor").value;

        var dadosajax = {
          'nome_produto': nome_produto,
          'descricao_produto': descricao_produto,
          'valor_produto': valor_produto,
          'fornecedor_produto': fornecedor_produto
         };

         var pageurl = 'grava_produto.php';
         $.ajax({
          url: pageurl,
          data: dadosajax,
          type: 'POST',
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert('Erro Gravação Produto!!');
          },
          success: function(result) {
            alert("Gravação Produto efetuada com sucesso");
            return;
          }
        })
      }
    </script>
  </head>
  <body>
    <h1>Cadastro de produto</h1>
    <p>Inclua as informações do produto abaixo</p>
    <form action="" method="POST">
      <label for="pname">Nome do produto:</label>
      <input type="text" id="pname" name="pname"><br><br>
      <label for="pdesc">Descrição do produto:</label>
      <input type="text" id="pdesc" name="pdesc"><br><br>
      <label for="pvalor">valor do produto</label>
      <input type="text" id="pvalor" name="pvalor"><br><br>
      <label for="pfornecedor">fornecedor</label>
      <input type="text" id="pfornecedor" name="pfornecedor"><br><br>
      <input type="button" value="Cadastrar" onClick="Cadastro()">
    </form>
  </body>
</html>
