<?php
session_start();

$_SESSION['username'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['contrasenya'];


if (($_SESSION['username'] == "GERARD") and ($_SESSION['contrasenya'] == '12345')) {
    echo "Las cookies guardadas son: ";
    echo "<br>";
    echo $_COOKIE["fruta"];
    echo "<br>";
    echo $_COOKIE["alcohol"];
    echo date("Y-m-d H:i:s");
    echo "<br/>";
    echo "Mi jugador favorito es: ";
    echo $_SESSION["jugadorFutbol"];
    echo "<br/>";
    echo "Mi equipo favorito es el: ";
    echo $_SESSION["equipoFutbol"];
} else {
    echo 'USUARIO INCORRECTO';
    echo "<a href='CODIGO_1.php'>";
    echo "Clica aqui para volver a registrate"; 
    echo "</a>";    
    exit();
}

?>
<html>
 <head>
  <title>Cual son mis gustos preferidos?</title>
 </head>
 <body>
<?php
    echo " My deporte favorito es ";
    echo $_GET['deporte='] ?? 'N/C';
    echo " <br/>";
   
    echo " My estadio favorito es ";
    echo $_GET['estadio'] ?? 'N/C';
    echo "<br/>";

    $deporte = urlencode("Mi deporte favorito es el futbol");
    echo "<a href='CODIGO_1.php?deporte=$deporte'>";
    echo "Clica aqui para ver cual es mi deporte favorito"; 
    echo "</a>";
    echo "<br/>";
    
    $estadio = urlencode("Mi estadio favorito es el Camp Nou");
    echo "<a href='CODIGO_1.php?estadio=$estadio'>";
    echo "Clica aqui para ver mi estadio favorito";
    echo "</a>";
?>
</body>
</html>
