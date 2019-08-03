<?php 
require_once 'core/class/class.php';
$pdo = BancoDados::conectar();
$play  = $_POST["login"];
$senha = $_POST["password"];
if (Sessao::login($play,$senha))
{	
	echo "1";
} else {
	echo "0";
}
