<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Cadastro de Itens pedido</font></b>    
      </br> </br>   

    <form action="../_insert.php" method="post">

    <input type=hidden name=tabela value="itenspedido">
    
    <?php
        $get1 = filter_input(INPUT_GET, "var_pedido");
                
        include_once("../_conexao.php");

        $conn = conectaBD();

        $select = "SELECT * FROM pedido WHERE codigoPedido = $get1";
            $resultado = mysqli_query($conn,$select);
            $i = mysqli_fetch_assoc($resultado);
            echo "<br> <br>";
            echo "Itenspedido do pedido: <strong>".$i['codigoPedido']." - ".$i['data']."</strong>";
            echo "<br> <br>";    
    ?>

<input type=hidden name="input_pedido" value="<?php echo $get1?>">

     <b> Games </b> 
      <select name="input_fk_games">
        <option>Selecione</option>
        
        <?php
            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM games order by Descricao";
            $resultado = mysqli_query($conn, $select);

            while($i = mysqli_fetch_assoc($resultado)){
            ?>
                  <option value="<?php echo $i['Codgames'];?>">
                                 <?php echo $i['Descricao'];?>
                  </option> 
        <?php
           }
        ?>
          </select>    
       </br></br>

     <b> preço:</b> <input type="text" name="input_preco" size="10,2">
       </br></br>

     <b> quantidade:</b> <input type="text" name="input_quantidade" size="10,2">
      </br></br>

    </br></br>
    <input type="reset" value="Reset">   <input type="submit" value="Cadastrar">
   
   </form>

</BODY>
</HTML>
