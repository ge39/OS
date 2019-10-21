<?php

$host = "localhost";
$username = "root";
$pass  = "root";
$dbname = "servico_db";

try{
	$pdo = New pdo("mysql:host=localhost;charset=utf8;dbname=".$dbname,$username,$pass);

}catch(PdoException $e)
{
	die('Não foi possivel se conectar ao banco'.$e->getMessage());
}