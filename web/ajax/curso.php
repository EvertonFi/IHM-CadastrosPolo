<?php 

require_once '../../core/class/class.php';
if (!Sessao::estaLogado()) {
	header('Location: ../index.php');
}
$nome = $_POST['curso'];
$instituicao = $_POST['instituicao'];
$insti = Cadastro::Curso($nome, $instituicao);

if ($insti == 1) {
	echo 1;
}else if ($insti == 0) {
	echo 0;
}