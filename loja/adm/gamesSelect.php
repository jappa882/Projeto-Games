<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Atualiza game</font></b>
      </br> </br>

     <table border = "1">
      <tr>
        <td><b>Código</b></td>
        <td><b>quantidade</b></td>
        <td><b>preco</b></td>
        <td><b>Descricao</b></td>
        <td><b>Editar?</b></td>
        <td><b>Excluir?</b></td>
     </tr>

     <?php
            include_once("../_conexao.php");

            $conn = conectaBD();

            $select = "SELECT * FROM games";
            $resultado = mysqli_query($conn,$select);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                 <td><?php echo $i['Codgames'];?></td>
                <td><?php echo $i['quantidade'];?></td>
                <td><?php echo $i['preco'];?></td>
                <td><?php echo $i['Descricao'];?></td>
                <td><a href="<?php echo"gamesFormEditar.php?var_codgames=". $i['Codgames']."&var_quantidade=".$i['quantidade']."&var_preco=".$i['preco']."&var_Descricao=".$i['Descricao']?>">Alterar</a></td>
                <td><a href="<?php echo"../_delete.php?var_cod=". $i['Codgames']."&tabela=games"?>">Excluir</a></td>
             </tr>
            <?php
           }
            ?>
     </table>

    <h3><a href="gamesFormInserir.html">Cadastrar nova GAME</a></h3>
</BODY>
</HTML>
