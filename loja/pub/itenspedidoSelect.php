<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atualiza Itens do Pedido</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>codigoPedido</b></td>
        <td><b>Codgames</b></td>
        <td><b>preco</b></td>
        <td><b>quantidade</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>

       <?php
            $get1 = filter_input(INPUT_GET, "var_codpedido");

            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM pedido WHERE codigoPedido = $get1";
            $resultado = mysqli_query($conn,$select);
            $i = mysqli_fetch_assoc($resultado);
            echo "<br> <br>";
            echo "Itenspedido do pedido: <strong>".$i['codigoPedido']." - ".$i['data']."</strong>";
            echo "<br> <br>";

            $select = "SELECT * FROM itenspedido WHERE codigoPedido = $get1";
            $resultado = mysqli_query($conn,$select);
            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codigoPedido'];?></td>
                <td><?php echo $i['Codgames'];?></td>
                <td><?php echo $i['preco'];?></td>
                <td><?php echo $i['quantidade'];?></td>
                <td><a href="<?php echo"itenspedidoFormEditar.php?var_codigoPedido=". $i['codigoPedido']."&var_Codgames=".$i['Codgames']."&var_preco=".$i['preco']."&var_quantidade=".$i['quantidade']?>">Alterar</a></td>
                <td><a href="<?php echo"../_delete.php?var_cod=". $i['codigoPedido']."&var_Codgames=". $i['Codgames']."&tabela=itenspedido"?>">Excluir</a></td>
             </tr>
            <?php
           }
            ?>
     </table>

    <h3><a href="<?php echo "itenspedidoFormInserir.php?var_pedido=". $get1?>">Cadastrar novo ITENS DO PEDIDO para o Pedido</a></h3>
</BODY>
</HTML>
