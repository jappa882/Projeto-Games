<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_codigoPedido");
      $get2 = filter_input(INPUT_GET, "var_Codgames");
      $get3 = filter_input(INPUT_GET, "var_preco");
      $get4 = filter_input(INPUT_GET, "var_quantidade");

   ?>

   <b><font color="#0000FF">Tela de Edição de ITENS DO PEDIDO</font></b>    
      </br> </br>   

    <form action="../_update.php" method="post">

     <input type=hidden name=tabela value="itenspedido">

            <?php
        $get1 = filter_input(INPUT_GET, "var_codigoPedido");
                
        include_once("../_conexao.php");

        $conn = conectaBD();

        $select = "SELECT * FROM pedido WHERE codigoPedido = $get1";
            $resultado = mysqli_query($conn,$select);
            $i = mysqli_fetch_assoc($resultado);
            echo "<br> <br>";
            echo "Itenspedido do pedido: <strong>".$i['codigoPedido']." - ".$i['data']."</strong>";
            echo "<br> <br>";    
    ?>

     <input type=hidden name="input_cod" size="8" value="<?php echo $get1?>">
       </br></br>  

       <input type=hidden name="input_fk_games" size="8" value="<?php echo $get2?>">
       </br></br>   

    <b> preço:</b> <input type="text" name="input_preco" size="10,2" value="<?php echo $get3?>">
       </br></br>  

    <b> quantidade:</b> <input type="text" name="input_quantidade" size="10,2" value="<?php echo $get4?>">
       </br></br>  


    <input type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
