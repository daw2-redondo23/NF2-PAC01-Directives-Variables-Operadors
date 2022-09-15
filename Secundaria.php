<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'Joe') and
    ($_SESSION['userpass'] == '12345')) {
    $_SESSION['authuser'] = 1;

} else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();     
}
$myfavcomida = urlencode("hamburguesa ");
$myfavserie = urlencode("la casa de papel ");
echo "<a href='Secundaria2.php?favcomida=$myfavcomida&favserie=$myfavserie'>";
echo "Ir a la siguiente pagina!"; 
echo "</a>";

setcookie("username","Ruben",time()+30);
setcookie("password","hola",time()+30);
setcookie("verificacion","1",time()+30);
$_SESSION['authuser'] = 1;
?>
<html>
 <head>
  <title>Prueba php</title>
 </head>
 <body>
<?php