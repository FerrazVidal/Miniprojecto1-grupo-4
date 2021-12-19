<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de Login</title>
<style>

body{
font-family: 'Times New Roman', Times, serif;
background-image: linear-gradient(45deg, cyan, yellow);

}
div{
background-color: rgba(0, 0, 0, 0.9);
position:absolute;
/*centralizar*/
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
/*padding e a distancia entre os elemento*/
padding: 80px;
border-radius: 15px;
color: white;

}

input{

padding: 15px;
border: none;
/*outline none serve para tirar as linha de fora do input*/
outline: none;

}
.inputsubmit{
background-color: dodgerblue;
border: none;
padding: 15px;
width: 100%;
border-radius: 15px;
color: white;
font-size: 15px;
cursor: pointer;
}
.inputsubmit:hover{

background-color:deepskyblue;

}

</style>

</head>
<body>
<a href="home.php">Voltar</a>
    <div>
<h1>Login</h1>
<form action="sessao.php" method="POST">
 <input type="text" name=" email"placeholder="Email"required>
<br><br>
<input type="password" name="senha" placeholder="Senha"required>
<br><br>
<input class="inputsubmit" type="submit" name="submit" value="ACESSAR">
</form>
</div>

</body>
</html>