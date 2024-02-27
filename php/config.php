<?php

$DbHost = 'Localhost';
$DbUsername = 'root';
$Dbpassword = '221277gg';
$DbName = 'barber';

$conexao = new mysqli($DbHost,$DbUsername,$Dbpassword,$DbName);
if ($conexao->connect_error)
{

echo"Falha  na conexao com o Banco de Dados";
}






?>