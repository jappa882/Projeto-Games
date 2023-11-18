<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atualiza Eventos</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>nome</b></td>
        <td><b>informacoespessoais</b></td>
        <td><b>Cpf</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
        <td><b>pedidos</b></td>
     </tr>

     <?php
            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM cliente";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['codigoCliente'];?></td>
                <td><?php echo $i['nome'];?></td>
                <td><?php echo $i['informacoespessoais'];?></td>
                <td><?php echo $i['Cpf'];?></td>
                <td><a href="<?php echo"clienteFormEditar.php?var_codigoCliente=".$i['codigoCliente']."&var_nome=".$i['nome']."&var_informacoespessoais=".$i['informacoespessoais']."&var_Cpf=".$i['Cpf']?>"> Alterar </a></td>
                <td><a href="<?php echo"../_delete.php?var_cod=". $i['codigoCliente']."&tabela=cliente"?>"> Excluir </a></td>
                
             </tr>
            <?php
           }
            ?>
     </table>

    <h3><a href="clienteFormInserir.html">Cadastrar novo CLIENTE</a></h3>
</BODY>
</HTML>
