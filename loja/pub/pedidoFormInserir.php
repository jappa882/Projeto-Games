<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Cadastro de Pedidos</font></b>
      </br> </br>

    <form action="../_insert.php" method="post">

    <input type=hidden name=tabela value="pedido">

     <b> Código do Pedido:</b> <input type="text" name="input_cod" size="8" >
       </br></br>
         
      <b> Cliente </b> 
      <select name="input_fk_cliente">
        <option>Selecione</option>
        
        <?php
            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM Cliente order by nome";
            $resultado = mysqli_query($conn, $select);

            while($i = mysqli_fetch_assoc($resultado)){
            ?>
                  <option value="<?php echo $i['codigoCliente'];?>">
                                 <?php echo $i['nome'];?>
                  </option> 
        <?php
           }
        ?>
          </select>    
       </br></br>

     <b> Data:</b> <input type="text" name="input_data" size="12">
      </br></br>

  <input type="reset" value="Reset">   <input type="submit" value="Cadastrar">

</form>

</BODY>
</HTML>