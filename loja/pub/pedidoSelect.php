<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atualiza Pedido</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>pedido</b></td>
        <td><b>data</b></td>
        <td><b>cliente</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
        <td><b>Itens do Pedido</b></td>
     </tr>

       <?php
            $get1 = filter_input(INPUT_GET, "var_codcliente");

            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM pedido";
            $resultado = mysqli_query($conn,$select);
            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codigoPedido'];?></td>
                <td><?php echo $i['data'];?></td>
                <td><?php echo $i['codigoCliente'];?></td>
                <td><a href="<?php echo"pedidoFormEditar.php?var_codpedido=". $i['codigoPedido']."&var_data=".$i['data']."&var_codcliente=".$i['codigoCliente']?>">Alterar</a></td>
                <td><a href="<?php echo"../_delete.php?var_cod=". $i['codigoPedido']."&tabela=pedido"?>">Excluir</a></td>
                <td><a href="<?php echo"ItensPedidoSelect.php?var_codpedido=". $i['codigoPedido']?>"> Itens do Pedido </a></td>
             </tr>
            <?php
           }
            ?>
     </table>

    <h3><a href="<?php echo "pedidoFormInserir.php?var_cliente=". $get1?>">Cadastrar nova PEDIDO para o Cliente</a></h3>
</BODY>
</HTML>
