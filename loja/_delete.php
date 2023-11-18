<?php
 include_once("_conexao.php");

 $get1 = (string)filter_input(INPUT_GET, "tabela");
 $get2 = filter_input(INPUT_GET, "var_cod");

 if($get1 == 'games'){
    excluirgames($get2);
    header("Location: /loja/adm/gamesSelect.php");
 }

 if($get1 == 'cliente'){
  excluircliente($get2);
  header("Location: /loja/pub/clienteSelect.php");
 }

 if($get1 == 'pedido'){
  excluirpedido($get2);
  header("Location: /loja/pub/pedidoSelect.php");
}

if($get1 == 'itenspedido'){
  $get3 = filter_input(INPUT_GET, "var_Codgames");
  excluiritenspedido($get2, $get3);
  header("Location: /loja/pub/itenspedidoSelect.php?var_codpedido=$get3"); 
}



 

 # ---------------------------------
 function excluirgames($p1){
   $conexao = conectaBD();

   $dados= "DELETE FROM games
            WHERE  Codgames = '{$p1}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Excluído com Sucesso!";

   desconectaBD($conexao);
 }

 # ---------------------------------
 function excluircliente($p1){
   $conexao = conectaBD();

   $dados= "DELETE FROM cliente
            WHERE  codigocliente = '{$p1}'";

   mysqli_query($conexao,$dados) or die(mysqli_error());

   echo "Excluído com Sucesso!";

   desconectaBD($conexao);
 }
 
 # ---------------------------------
 function excluirpedido($p1){
  $conexao = conectaBD();

  $dados= "DELETE FROM pedido
           WHERE  codigoPedido = '{$p1}'";

  mysqli_query($conexao,$dados) or die(mysqli_error());

  echo "Excluído com Sucesso!";

  desconectaBD($conexao);
}

function excluiritenspedido($p1, $p2){
  $conexao = conectaBD();  

  $dados= "DELETE FROM itenspedido
           WHERE  codigoPedido = '{$p1}' and Codgames = '{$p2}'";

  mysqli_query($conexao,$dados) or die(mysqli_error());

  echo "Excluído com Sucesso!";

  desconectaBD($conexao);
}

?>
