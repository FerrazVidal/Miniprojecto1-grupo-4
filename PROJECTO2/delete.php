<?php 
if(!empty($_GET['id']))
{


include_once('config.php');


$id = $_GET['id'];

$sqlDelete1 ="DELETE  FROM identificacao WHERE chave=$id";
$resultDelete = $conexao ->query($sqlDelete1);

$sqlDelete ="DELETE  FROM  usuario  WHERE id=$id";
$resultDelete = $conexao ->query($sqlDelete);


header('location: sistema.php');

}


?>