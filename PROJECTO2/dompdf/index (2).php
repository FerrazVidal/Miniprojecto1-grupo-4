<?php

    
require_once 'dompdf/autoload.inc.php';

Use Dompdf\Dompdf;

$pdo = new PDO('mysql:host=localhost; dbname=menezes;', 'root', '');
$sql = $pdo->query('SELECT * FROM usuario, identificacao ');
$html = '<table border=1 width=100%>';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td>ID</td>';
$html .= '<td>Nome</td>';
$html .= '<td>Senha</td>';
$html .= '<td>Email</td>';
$html .= '<td>Telefone</td>';
$html .= '<td>Sexo</td>';
$html .= '<td>Data de Nascimento</td>';
$html .= '<td>Nacionalidade</td>';
$html .= '<td>Provincia</td>';
$html .= '<td>Municipio</td>';
$html .= '</tr>';
$html .= '</thead>';



while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
$html .= '<tbody>';
$html .='<tr><td>'.$linha['id'] . '<td>';
$html .='<td>'.$linha['nome'] . '<td>';
$html .='<td>'.$linha['senha'] . '<td>';
$html .='<td>'.$linha['email'] . '<td>';
$html .='<td>'.$linha['telefone'] . '<td>';
$html .='<td>'.$linha['sexo'] . '<td>';
$html .='<td>'.$linha['data_nasc'] . '<td>';
$html .='<td>'.$linha['nacionalidade'] . '<td>';
$html .='<td>'.$linha['provincia'] . '<td>';
$html .='<td>'.$linha['municipio'] . '<td></tr>';
$html .= '</tbody>';
}


$html .='</table>';

//instanciar a bibloteca dompdf

$dompdf = new Dompdf;
//coverter html
$dompdf->loadhtml($html);
//Definir o tamanho do papel e orientacao

$dompdf-> setPaper('A4', 'portrait');

//renderizar
//$dompdf->render();

//enviar para browser

$dompdf->stream('relatorio.pdf', array('attachment' =>false ));

?>;