<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_codpedido");
      $get2 = filter_input(INPUT_GET, "var_data");  
      $get3 = filter_input(INPUT_GET, "var_codcliente");  
   ?>

   <b><font color="#0000FF">Tela de Edição de PEDIDOS</font></b>    
      </br> </br>   

    <form action="../_update.php" method="post">

     <input type=hidden name=tabela value="pedido">

     <b> Código do Pedido:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

     <b> Cliente </b> 
      <select name="input_fk_cliente">
        <option>Selecione</option>
        <?php
            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM cliente order by nome";
            $resultado = mysqli_query($conn, $select);

            while($i = mysqli_fetch_assoc($resultado)){
                if ($i['codigoCliente'] == $get3) { ?>

                <option selected value="<?php echo $i['codigoCliente'];?>">
                                        <?php echo $i['nome'];?>
                </option> 
               
            <?php
                } else { ?>
                    <option value="<?php echo $i['codigoCliente'];?>">
                                   <?php echo $i['nome'];?>
                    </option> 
                    
            <?php } #fim if else
            } # fim while
        ?>
          </select>    
       </br></br>

    <b> data:</b> <input type="text" name="input_data" size="8" value="<?php echo $get2?>">
       </br></br>  

    

    <input type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>   
