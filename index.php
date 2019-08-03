<?php require_once 'core/class/class.php';
if (Sessao::estaLogado()) {
	header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Sistema de Agendamentos e Reservas</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="core/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="core/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo">Logo
			</a>
			<ul class="right hide-on-med-and-down">
				<li><a class="modal-trigger" href="#modal">Login</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li><a class="modal-trigger" href="#modal">Login</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<br><br>
			<h1 class="header center orange-text">Bem Vindo</h1>
			<div class="row center">
				<h5 class="header col s12 light">Para começar realize seu login abaixo.</h5>
			</div>
			<div class="row center">
				<button data-target="modal" class="btn-large waves-effect waves-light orange modal-trigger">Realizar Login</button>
			</div>
			<br><br>

		</div>
	</div>


	<div id="modal" class="modal">
		<form class="col s12" id="login_user">
			<div class="modal-content">
				<h4>Login</h4>
				<div class="row">
					<div class="input col s12 l6">
						<label name="login" >Login</label>
						<input type="text" id="login" class="validate">
					</div>
					<div class="input col s12 l6">
						<label name="password">Senha</label>
						<input type="text" id="password" class="validate">
					</div>
				</div>
			</div>
			<div id="resultado">
				
			</div>
			<div class="modal-footer">
				<a class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
				<a href="#!" id="btn_login" class=" waves-effect waves-green btn" onclick="login()">Login</a>
			</div>
		</form>
	</div>

	<footer class="page-footer orange">
		<div class="footer-copyright">
			<div class="container">
				Desenvolvido por <a class="black-text text-lighten-3">Everton, Andriole e Jheklos</a>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="core/assets/js/materialize.js"></script>
	<script src="core/assets/js/init.js"></script>
	<script>
		$(document).ready(function(){
			$('.modal').modal();
		});

		
		function login(){
			var login = document.getElementById('login').value;
			var password = document.getElementById('password').value;
			$.ajax({
				method: "POST",
				url: "doLogar.php",
				data: { 
					login: login, 
					password: password 
				},
				beforeSend : function(){
					$("#btn_login").html("Carregando...");
				}
			})
			.done(function(msg){
				$("#btn_login").html("Login");
				if (msg == 0) {
					$("#resultado").html("Login ou Senha invalida!!!");
				}else if (msg == 1) {
					window.location.href = "web/";
				}
			})
		}
	</script>

</body>
</html>
