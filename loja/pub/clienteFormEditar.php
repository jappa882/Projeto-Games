<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_codigoCliente");
      $get2 = filter_input(INPUT_GET, "var_nome");
      $get3 = filter_input(INPUT_GET, "var_informacoespessoais");
      $get4 = filter_input(INPUT_GET, "var_Cpf");
   ?>

   <b><font color="#0000FF">Tela de Edição de CLIENTES</font></b>
      </br> </br>

    <form action="../_update.php" method="post">

    <input type=hidden name=tabela value="cliente">

    <b> Código:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1?>" readonly>
       </br></br>
       
    <b> Nome:</b> <input type="text" name="input_nome" size="30" value="<?php echo $get2?>">
       </br></br>

    <b> informações pessoais:</b> <input type="text" name="input_informacoespessoais" size="50" value="<?php echo $get3?>">
       </br></br>

    <b> Cpf:</b> <input type="text" name="input_Cpf" size="8" value="<?php echo $get4?>">
       </br></br>

    <input type="submit" value="Salvar">

   </form>

</BODY>
</HTML>
