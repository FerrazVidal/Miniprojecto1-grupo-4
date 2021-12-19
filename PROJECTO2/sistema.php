<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))

{

unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: login.php');
}
$logado = $_SESSION['email'];
//Method de tirar as informacoes do banco de dado para listar

$sql = "SELECT * FROM usuario AS u INNER JOIN  identificacao AS i on u.id=i.chave  ORDER BY nome ASC";
$result = $conexao->query($sql);


?>
<html>
<style>
body{
background-image: url("fundo/layout4.jpg");
color: yellow;
border-radius: 5px;

}

a{
background-color:red;
color: white;
border-radius: 5px;
cursor:pointer;



}

/*h1{
    position: absolute;
    top: 20%;
    margin-left: 10px;
    border: 2px solid goldenrod;
    padding: 10px;
    right: 5%;
    background-color: dodgerblue;
    border-radius: 8px;
    color: red;




}*/

.box{

    background-color: blue;
    border-radius: 5px;
    color: white;
    cursor:pointer;

}
.box:hover{
color: green;

}

.box2{

background-color: red;
border-radius: 5px;
color: white;
cursor:pointer;

}

.box2:hover{
color:green;


}
.box3{
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.6);

}







</style>
<head>
    <meta charset="utf8">
</head>
<body>


<a href="sair.php" class="btn btn-danger-me-5">Sair</a>
<div class="box3">
<?php echo"<h1> Seja Bem vindo <u>$logado</u><h1>"; ?>



<table border="1">
    

    <tr>
    
    
        <td>Id</td>
        <td>Nome Completo</td>
        <td>Senha</td>
        <td>--------------Email-----------</td>
        <td>Telefone</td>
        <td>Sexo</td>
        <td>Data de Nascimento</td>
        <td>Nacionalidade</td>
        <td>Provincia</td>
        <td>Municipio</td>
        <td>-----Ação-----</td>
        
        

        </tr>
    

        <?php while($user = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['nome']; ?></td>
        <td><?php echo $user['senha']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['telefone']; ?></td>
        <td><?php echo $user['sexo']; ?></td>
        <td><?php echo date("d/m/y", strtotime($user['data_nasc'])); ?></td>
        <td><?php echo $user['nacionalidade']; ?></td>
        <td><?php echo $user['provincia']; ?></td>
        <td><?php echo $user['municipio']; ?></td>
        <td><a class="box" href="edit.php?id=<?php echo $user['id']; ?>">Editar </a>
        <a class="box2" href="delete.php?id=<?php echo $user['id']; ?>"> Deletar</a></td>
        
    </tr>
    <?php } ?>
</table>




</body>
</html>