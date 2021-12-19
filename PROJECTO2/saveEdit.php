<?php
session_start();
include_once "config.php";

$result = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($result);


{

echo "id =: 'id' <br>";

//$query_result = "UPDATE usuario SET  nome ='$nome',senha='$senha',email='$email'
//,telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc'
//,nacionalidade='$nacionalidade',provincia='$provincia',municipio='$municipio'
//,WHERE id=:id";
//$up_usuario = $conexao->prepare($query_result);
//$up_usuario->execute;


}
if(isset($_POST['update']))

{

    $id = $_POST['id'];
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $email =  $_POST['email'];
  $telefone =  $_POST['telefone'];
  $sexo = $_POST['sexo'];
  $data_nasc = $_POST['data_nascimento'];
  $nacionalidade =  $_POST['nacionalidade'];
  $provincia = $_POST['provincia'];
  $municipio =  $_POST['municipio'];   



    $sqlUpdate ="UPDATE usuario, identificacao SET nome ='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',nacionalidade='$nacionalidade',provincia='$provincia',municipio='$municipio',
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
    
 
}

header('Location: sistema.php');
?>