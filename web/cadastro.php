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

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block center">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Cadastro de Curso</h5>

            <p class="light">Cadastre o curso para poder realizar o cadastro de equipamentos e o cadastro de salas.</p>
            <div class="center">
              <a class="waves-effect waves-light btn" href="cursos.php">Cadastrar Curso</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block center">
            <h2 class="center light-blue-text"><i class="material-icons">devices</i></h2>
            <h5 class="center">Cadastro de equipamentos</h5>

            <p class="light center">Para cadastrar equipamentos que seram utilizados durante as aulas.</p>
            <div class="center">
              <a class="waves-effect waves-light btn" href="equipamentos.php">Cadastrar Equipamento</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block center">
            <h2 class="center light-blue-text"><i class="material-icons">home</i></h2>
            <h5 class="center">Cadastro de Salas</h5>

            <p class="light">Cadastre a sala onde os alunos do seu curso assistiram as aulas do dia.</p>
             <div class="center">
              <a class="waves-effect waves-light btn" href="salas.php">Cadastrar Sala</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
        Desenvolvido por <a class="orange-text text-lighten-3">Everton, Andriole e Jheklos</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../core/assets/js/materialize.js"></script>
  <script src="../core/assets/js/init.js"></script>

</body>
</html>
