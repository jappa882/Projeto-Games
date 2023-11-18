<?php
 include_once("_conexao.php");

 if($_POST["tabela"] == 'games'){
      CadastraGames($_POST["input_cod"], $_POST["input_quantidade"], $_POST["input_preco"], $_POST["input_Descricao"]);
      header("Location: /loja/adm/gamesSelect.php");
 }

 if($_POST["tabela"] == 'cliente'){
      Cadastracliente($_POST["input_cod"], $_POST["input_informacoespessoais"], $_POST["input_Cpf"], $_POST["input_nome"]);
      header("Location: /loja/pub/clienteSelect.php");
 }

if($_POST["tabela"] == 'pedido'){
     Cadastrapedido($_POST["input_fk_cliente"], $_POST["input_cod"], $_POST["input_data"]);
     header("Location: /loja/pub/pedidoSelect.php"); 
}

if($_POST["tabela"] == 'itenspedido'){
     Cadastraitenspedido($_POST["input_pedido"], $_POST["input_fk_games"], $_POST["input_preco"], $_POST["input_quantidade"]);
     $par = $_POST["input_pedido"];
     header("Location: /loja/pub/itenspedidoSelect.php?var_codpedido=$par"); 
}

# -----------------------------------------------------------------------
function CadastraGames($cod, $quantidade, $preco, $descricao){
      $conexao = conectaBD();

      $dados= "INSERT INTO games(codgames, quantidade, preco, Descricao) VALUES ({$cod},'{$quantidade}','{$preco}','{$descricao}')";
      mysqli_query($conexao,$dados) or die(mysqli_error());

      echo "Cadastro com Sucesso!";

      desconectaBD($conexao);
  }

# -----------------------------------------------------------------------
function cadastracliente($cod, $informacoespessoais, $Cpf, $nome){
      $conexao = conectaBD();

      $dados= "INSERT INTO cliente(codigoCliente, informacoespessoais, Cpf, nome) VALUES ({$cod},'{$informacoespessoais}', '{$Cpf}','{$nome}')";
      echo $dados;
      mysqli_query($conexao,$dados) or die(mysqli_error());

      echo "Cadastro com Sucesso!";

      desconectaBD($conexao);
  }

// ---------------------------------
function cadastrapedido($codcliente, $codpedido, $data){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO pedido(codigoCliente, codigoPedido, data) VALUES ({$codcliente}, {$codpedido}, '{$data}')";
     echo $dados;
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Cadastro com Sucesso!";
  
     desconectaBD($conexao);
 }

 function cadastraitenspedido($codigoPedido, $codgames, $preco, $quantidade){
     $conexao = conectaBD();  
  
     $dados= "INSERT INTO itenspedido(codigoPedido, Codgames, preco, quantidade) VALUES ({$codigoPedido}, {$codgames}, {$preco}, {$quantidade})";
     echo $dados;
     mysqli_query($conexao,$dados) or die(mysqli_error());
  
     echo "Cadastro com Sucesso!";
  
     desconectaBD($conexao);
 }

?>
