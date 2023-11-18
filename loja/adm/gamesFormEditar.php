<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <?php
      $get1 = filter_input(INPUT_GET, "var_codgames");
      $get2 = filter_input(INPUT_GET, "var_quantidade");
      $get3 = filter_input(INPUT_GET, "var_preco");
      $get4 = filter_input(INPUT_GET, "var_Descricao");
   ?>

   <b><font color="#0000FF">Tela de Edição de GAMES</font></b>    
      </br> </br>   

    <form action="../_update.php" method="post">

     <input type=hidden name=tabela value="games">

     <b> Código:</b> <input type="text" name="input_cod" size="8" value="<?php echo $get1?>" readonly>
       </br></br>

    <b> quantidade:</b> <input type="text" name="input_quantidade" size="8" value="<?php echo $get2?>">
       </br></br>  

    <b> preço:</b> <input type="text" name="input_preco" size="10,2" value="<?php echo $get3?>">
       </br></br>  

    <b> Descrição:</b> <input type="text" name="input_Descricao" size="30" value="<?php echo $get4?>">
       </br></br>     
       
    <input type="submit" value="Salvar">
   
   </form>

</BODY>
</HTML>
