<?php
session_start();
setcookie("comida","macarrones",time()+60);
setcookie("alcohol","ron",time()+60);
$_SESSION['jugadorFutbol'] = "Messi";
$_SESSION['equipoFutbol'] = "FC Barcelona";
?>


<html>
 <head>
  <title>REGISTRATE</title>
 </head>
 <body>
  <form method="post" action="CODIGO_2.php">
   <p>DIME TU USUARIO: 
    <input type="text" name="usuario"/>
   </p>
   <p>DIME TU CONTRASENYA: 
    <input type="password" name="contrasenya"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>
<?php

?>