<?php
$dbhost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'estudante';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);
if($conexao->connect_errno)
{
echo "Erro";
}
else
{
//echo "Conexao efectuada com sucesso";

}



?>
