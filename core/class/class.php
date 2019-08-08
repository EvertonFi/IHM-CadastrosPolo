<?php 
date_default_timezone_set('America/Sao_Paulo');
abstract class BancoDados
{

	const host = 'localhost';
	const dbname = 'IHM';
	const user = 'root';
	const password = '';

	static function conectar()
	{
		try 
		{
			$pdo = new PDO("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}
abstract class Sessao
{
	function __construct()
	{
		
	}
	
	static function estaLogado()
	{
		if(!isset($_SESSION)) {
			session_start();
		}
		if (!isset($_SESSION['admin-logado'])) {
			Sessao::logout();
			return false;
		} else {
			return true;
		}
	}
	static function logout()
	{
		
		if(!isset($_SESSION)) {
			session_start();
		}
		
		$_SESSION['admin-name'] = NULL;
		$_SESSION['admin-logado'] = NULL;
		unset ($_SESSION['admin-name']);
		unset ($_SESSION['admin-logado']);
		session_destroy();
	}
	static function login($user,$password)
	{
		$pdo = BancoDados::conectar();
		$handler = $pdo->prepare('SELECT * FROM usuario WHERE login =:user AND password = PASSWORD(:password)');
		
		$handler->bindValue(':user',$user);
		$handler->bindValue(':password',$password);
		$handler->execute();
		$usuario = $handler->fetch(PDO::FETCH_OBJ);
		$logado = $handler->rowCount();
		if ($logado)
		{
			session_start();
			$_SESSION['admin-logado'] = 1;
			$_SESSION['admin-id_idx'] = $usuario->id;
			$_SESSION['admin-Name'] = $usuario->login;
			return true;
		} else {
			Sessao::logout();
			return false;
			
		}
	}
}

abstract class Cadastro
{
	static function Curso($nome, $inst)
	{
		try {
			$pdo = BancoDados::conectar();
			$handler = $pdo->prepare('SELECT * FROM instituicao WHERE nome_instituicao = :instituicao');
			$handler->bindValue(':instituicao',$inst);
			$handler->execute();
			$usuario = $handler->fetch(PDO::FETCH_OBJ);
			$logado = $handler->rowCount();

			if ($logado == 0) {
				$inserir = $pdo->prepare("INSERT INTO instituicao (nome_instituicao) VALUES (:instituicao)");
				$inserir->bindValue(':instituicao',$inst);
				$inserir->execute();
				$handler = $pdo->prepare('SELECT * FROM instituicao WHERE nome_instituicao = :instituicao');
				$handler->bindValue(':instituicao',$inst);
				$handler->execute();
				$instituicao = $handler->fetch(PDO::FETCH_OBJ);
				$id_inst = $instituicao->id;
				$inserir = $pdo->prepare("INSERT INTO curso (nome, id_instituicao) VALUES (:curso,:id_instituicao)");
				$inserir->bindValue(':curso',$nome);
				$inserir->bindValue(':id_instituicao',$id_inst);
				$inserir->execute();
				return 1;
			} else if ($logado == 1) {
				$handler = $pdo->prepare('SELECT * FROM instituicao WHERE nome_instituicao = :instituicao');
				$handler->bindValue(':instituicao',$inst);
				$handler->execute();
				$instituicao = $handler->fetch(PDO::FETCH_OBJ);
				$id_inst = $instituicao->id;
				$inserir = $pdo->prepare("INSERT INTO curso (nome, id_instituicao) VALUES (:curso,:id_instituicao)");
				$inserir->bindValue(':curso',$nome);
				$inserir->bindValue(':id_instituicao',$id_inst);
				$inserir->execute();
				if ($inserir) {
					return 1;
				}
			}
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}
	
	
	static function Sala($nome)
	{
		try {
			$pdo = BancoDados::conectar();

				$inserir = $pdo->prepare("INSERT INTO salas (Nome) VALUES (:nome)");
				$inserir->bindValue(':nome',$nome);
				$inserir->execute();
				if ($inserir) {
					return 1;
				}else{
					return 0;
				}
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}
	
	


}

abstract class Lista
{

	static function Curso(){
		try {
			$pdo = BancoDados::conectar();
			$lista = $pdo->prepare('SELECT * FROM curso INNER JOIN instituicao ON curso.id_instituicao=instituicao.id');
			$lista->execute();
			$lista = $lista->fetchAll(PDO::FETCH_OBJ);

			return $lista;
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}

	static function Salas(){
		try {
			$pdo = BancoDados::conectar();
			$lista = $pdo->prepare('SELECT * FROM salas');
			$lista->execute();
			$lista = $lista->fetchAll(PDO::FETCH_OBJ);

			return $lista;
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}

}
?>
