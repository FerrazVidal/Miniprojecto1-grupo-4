 <?php
if(isset($_POST['submit']))
{


include_once('config.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email =  $_POST['email'];
$telefone =  $_POST['telefone'];
$sexo = $_POST['sexo'];
$ano_nascimento = $_POST['ano_nascimento'];
$Nacionalidade =  $_POST['Nacionalidade'];
$Provincia = $_POST['Provincia'];
$Municipio =  $_POST['Municipio'];

$result = mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email,telefone,sexo,data_nasc) 
VALUE ('$nome','$senha','$email','$telefone','$sexo','$ano_nascimento')");
$id_chave = mysqli_insert_id($conexao);
$result = mysqli_query($conexao, "INSERT INTO identificacao(nacionalidade,provincia,municipio,chave) 
VALUE ('$Nacionalidade','$Provincia','$Municipio ','$id_chave')");
 header('Location: login.php');
}
 
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de Cadastro</title>
    <style>

    body{
       /* background-image: url("fundo/layout1.jpg");*/
    font-family: 'Times New Roman', Times, serif;
    background-image: linear-gradient(45deg, cyan, yellow);;
    
        }
        /*Medoto para centralizar o corpo de acordo com a class em uso,
        tambem serve para altear o corpo todo*/
        .box{
            color: yellow;
    position: absolute;
    top: 50%;
    right: 20%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 15px;
        }
    /*serve para alterar a estrutura das linhas*/
        fieldset{
    border: 3px solid goldenrod;
        }
        /*serve para alterar a estrutura do texto*/
    legend{
    position: absolute;
    top: 0%;
    margin-left: 10px;
    border: 2px solid goldenrod;
    padding: 5px;
    right: 20%;
    background-color: dodgerblue;
    border-radius: 8px;
    color: white;
    }
    /*serve para alterar os quadros*/
    .inputbox{
    position: relative;
    }
    .inputUser{
    background: none;
    border: none;
    border-bottom: 3px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%; 
    letter-spacing: 2px;
    }
    /*altera a posicao do texto acima de quadro*/
    .labelinput{
    position: absolute;
    top: 3px;
    left: 0px;
    pointer-events: none;
    transition: 5px;
    }
    .inputUser:focus- .labelinput,.inputUser:valid- .labelinput{
    top:-20px;
    font-size: 12px;
    color: dodgerblue;
    
    }
    #ano_nascimento{
        background: rgb(171, 216, 8);
    border: none;
    border-radius: 5px;
    letter-spacing: 2px;
    cursor: pointer;
    }
    /*Alterar as animacoes do botao*/
    #submit{
    background-image: linear-gradient(to right,rgb(2,92,220), rgb(92,25,210));
    border: none;
    width: 300px;
    border-radius: 5px;
    padding: 5px;
    color: red;
    cursor: pointer;
    
    }
    #submit:hover{
    /*background-image: linear-gradient(to right,rgb(0,92,197), rgb(90,20,220));*/
    background: rgb(171, 216, 8);
    }
    
    #submit2{
    background-image: linear-gradient(to right, rgb(2,92,220), rgb(92,25,210));
    border-radius: 5px;
    padding: 4px;
    border: none;
    width: 280px;
    color: white;
    cursor: pointer;
    
    }
    #submit2:hover{
        background: rgb(171, 216, 8);
    }



     }


    </style>
</head>
<body>
<a href="home.php">Voltar</a>
<div class="box">
<form method="POST">
<fieldset>
<legend><b>Cadastro de Usuario</b></legend>
<br>
<div class="inputbox">
        <br>
    <input type="text" name="nome" id="nome" class="inputUser"required>
<label for="nome" class="labelinput">Nome Completo</label>
</div>
<div class="inputbox">
        <br>
    <input type="password" name="senha" id="senha" class="inputUser"required>
<label for="senha" class="labelinput">Senha</label>
</div>
<div class="inputbox">
        <br>
    <input type="email" name="email" id="email" class="inputUser"required>
<label for="email" class="labelinput">Email</label>
</div>
<div class="inputbox">
        <br>
    <input type="tel" name="telefone" id="telefone" class="inputUser"required>
<label for="telefone" class="labelinput">Telefone</label>
</div>
<p>Sexo</p>
<input type="radio" id="Femenino" name="sexo" value="femenino"required>
<label for="Femenino">Femenino</label>
<br>
<input type="radio" id="Masculino" name="sexo" value="masculino"required>
<label for="Masculino">Masculino</label>
<br>
<label for="ano_nascimento"><b>Data de Nascimento:</b></label>    
<input type="date" name="ano_nascimento" id="ano_nascimento"required>
<br><br>
<div class="inputbox">
        <br>
        
    <input type="text" name="Nacionalidade" id="Nacionalidade" class="inputUser"required>
<label for="Nacionalidade" class="labelinput">Nacionalidade</label>
</div><div class="inputbox">
    <br>
<input type="text" name="Provincia" id="Provincia" class="inputUser"required>
<label for="Provincia" class="labelinput">Provincia</label>
</div><div class="inputbox">
        <br>
<input type="text" name="Municipio" id="Municipio" class="inputUser"required>
<label for="Municipio" class="labelinput">Municipio</label>
</div>    
<br>    
<input type="submit" name="submit" id="submit"value="SALVAR">
<br><br>



</fieldset>


</form>
</div>   
</body>
</html>