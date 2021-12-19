<?php 

	require dirname(__DIR__,1). "../dompdf/autoload.inc.php";
	include_once('config.php');
	$sql = "SELECT * FROM usuario AS u INNER JOIN  identificacao AS i on u.id=i.chave  ORDER BY nome ASC";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>teste pdf</title>

	<style>
		@page {
			margin: 70px 0;			
		}

		body {
			margin: 0;
			padding: 30px;
			font-family: sans-serif;
		}

		h1 {
			text-align: center;
			margin-bottom: 20px;
			color: blue;
		}

		p {
			text-indent: 50px;
			text-align: justify;
			color: grey;
		}
	table,td,th{
		border-collapse: collapse;
	}
	</style>
</head>
<body>
	
<table border="1">
    

    <tr>
    
    
        <td>Id</td>
        <td>Nome Completo</td>
        <td>Senha</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Sexo</td>
        <td>Data de Nascimento</td>
        <td>Nacionalidade</td>
        <td>Provincia</td>
        <td>Municipio</td>
      
        
        

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
       
        
    </tr>
    <?php } ?>
</table>

 <?= date("d/m/y \à\s H\hi"); ?></p>
</body>
</html>