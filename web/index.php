<?php 
require_once '../core/class/class.php';
if (!Sessao::estaLogado()) {
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
  <link href="../core/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../core/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php require_once 'topo.html'; ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Bem Vindo</h1>
      <div class="row center">
        <h5 class="header col s12 light">Aqui você consegue fazer suas reservas de salas e de equipamentos</h5>
      </div>
      <div class="row center">
        <a href="cadastro.php" id="download-button" class="btn-large waves-effect waves-light orange">Comece agora</a>
      </div>
      <br><br>

    </div>
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
 <script src="../core/assets/js/materialize.js"></script>
 <script src="../core/assets/js/init.js"></script>

</body>
</html>
