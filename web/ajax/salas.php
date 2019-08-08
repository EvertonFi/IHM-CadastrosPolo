<?php 

require_once '../../core/class/class.php';
if (!Sessao::estaLogado()) {
	header('Location: ../index.php');
}
$nome = $_POST['sala'];
$sala = Cadastro::Sala($nome);

if ($sala == 1) {
	echo 1;
}else if ($sala == 0) {
	echo 0;
}