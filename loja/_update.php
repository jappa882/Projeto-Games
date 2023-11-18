<?php
 include_once("_conexao.php");

 if($_POST["tabela"] == 'games'){
      editagames($_POST["input_cod"], $_POST["input_quantidade"], $_POST["input_preco"], $_POST["input_Descricao"]);
      header("Location: /loja/adm/gamesSelect.php");
 }

 if($_POST["tabela"] == 'cliente'){
      editacliente($_POST["input_cod"], $_POST["input_nome"], $_POST["input_informacoespessoais"], $_POST["input_Cpf"]);
      header("Location: /loja/pub/clienteSelect.php");
 }

 if($_POST["tabela"] == 'pedido'){
     editapedido($_POST["input_cod"], $_POST["input_fk_cliente"], $_POST["input_data"]);
     header("Location: /loja/pub/pedidoSelect.php");
 }

 if($_POST["tabela"] == 'itenspedido'){
     editaitenspedido($_POST["input_cod"], $_POST["input_fk_games"], $_POST["input_preco"], $_POST["input_quantidade"]);
     $par = $_POST["input_cod"];
     header("Location: /loja/pub/itenspedidoSelect.php?var_codpedido=$par"); 
 }


# -------------------------------------------
function editagames($p1, $p2, $p3, $p4){
   $conexao = conectaBD();

  $dados= "UPDATE  games
           SET    quantidade = '{$p2}',
                  preco = '{$p3}',
                  Descricao = '{$p4}'
           WHERE  Codgames = '{$p1}'";

echo $dados;

   mysqli_query($conexao, $dados) or die(mysqli_error());

   echo "Editado com Sucesso!";

   desconectaBD($conexao);
 }

 # -------------------------------------------
 function editacliente($p1, $p2, $p3, $p4){
    $conexao = conectaBD();

   $dados= "UPDATE  cliente
            SET    nome = '{$p2}',
                   informacoespessoais = '{$p3}',
                   Cpf = '{$p4}'
            WHERE  codigoCliente = '{$p1}'";

    echo $dados;

    mysqli_query($conexao, $dados) or die(mysqli_error());

    echo "Editado com Sucesso!";

    desconectaBD($conexao);
  }

  function editapedido($p1, $p2, $p3){
     $conexao = conectaBD();
 
    $dados= "UPDATE  pedido
              SET    CodigoCliente = '{$p2}',
                     Data         = '{$p3}'
              WHERE  CodigoPedido = '{$p1}'";
 
     echo $dados;
 
     mysqli_query($conexao, $dados) or die(mysqli_error());
 
     echo "Editado com Sucesso!";
 
     desconectaBD($conexao);
   } 

# ---------------------------------

function editaitenspedido($p1, $p2, $p3, $p4){
     $conexao = conectaBD();  
  
    $dados= "UPDATE  itenspedido
              SET    preco     = '{$p3}', 
                     quantidade     = '{$p4}'
              WHERE  codigoPedido      = '{$p1}' and 
                     Codgames  = '{$p2}'";
     
     echo $dados;
     
     mysqli_query($conexao, $dados) or die(mysqli_error());
  
     echo "Editado com Sucesso!";
  
     desconectaBD($conexao);
   }
 ?>
