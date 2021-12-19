<?php

session_start();
print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{

include_once('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
print_r('Email:' .$email);
print_r('<br>');
print_r('Senha:' .$senha);

//Metodo para verificacao na base de dado se ha cadastro com essa descricao
$sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha' ";
$result = $conexao->query($sql);

//print_r($sql);
//print_r($result);


//Metodo para verificar o numero de digito
if(mysqli_num_rows($result) < 1)
{
//print_r('Nao existe, vai eliminar automaticamente

unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: login.php');
}
else
{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
header('Location: sistema.php');
//print_r('Existe');
}

}



else
{

header('location: login.php');

}

?>