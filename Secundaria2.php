<?php
session_start();
$_SESSION['username']=$_COOKIE["username"];
$_SESSION['userpass']=$_COOKIE["password"]; 
$_SESSION['verificacion']=$_COOKIE["verificacion"]; 
$_SESSION['authuser'] = 0;

//check username and password information
if (($_SESSION['username'] == 'Ruben') and
    ($_SESSION['userpass'] == 'hola')and
    ($_SESSION['verificacion'] == '1')) {
    $_SESSION['authuser'] = 1;}

 else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();     
}
echo "Mi comida favorita es  ";
echo $_GET['favcomida'];
echo "y mi serie favorita es ";
echo $_GET['favserie'];

$variablePrueba;

if (isset($_GET['variablePrueba'])){
	echo "<br> Esta prueba funciona";}

echo "<br> <a href='Principal.php'>";
echo "Volver al inicio!"; 
echo "</a>";

?>