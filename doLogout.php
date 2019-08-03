<?php
	require_once 'core/class/class.php';
	Sessao::logout();
	header('Location: index.php');