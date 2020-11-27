<?php 
session_start();
echo("config.php loaded <br>");

$conn = mysqli_connect('localhost', 'root', '', 'luving_portfolio');


if (!$conn) {  
    die("Conexão com banco de dados falhou: " . mysqli_connect_error());  
}


define('ROOT_PATH', realpath(dirname(__FILE__)));

?>