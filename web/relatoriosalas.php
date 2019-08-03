<?php 
$result = false;
if (isset($_GET['date']) && $_GET['date'] != ''){
  $result = true;
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

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block center">
            <h2 class="center light-blue-text"><i class="material-icons">home</i></h2>
            <h5 class="center">Salas Reservadas</h5>
            <form action="">
              <div class="input-field col s12 l6">
                <input type="text" name="date" class="datepicker">
                <label>Data de relatório</label>
              </div>
              <div class="input-field col s12 l6">
                <button class="waves-effect waves-light btn" type="submit">Gerar Relatório</button>
              </div>
            </form>
            <?php if ($result) { ?>

            
            <table class="striped centered">
              <thead>
                <tr>
                  <th>Sala</th>
                  <th>Curso</th>
                  <th>Instituição</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alvin</td>
                  <td>Alvin Alvin AlvinAlvin Alvin</td>
                  <td>Alvin</td>
                </tr>
                <tr>
                  <td>Alan</td>
                  <td>Alan</td>
                  <td>Alan</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Jonathan</td>
                  <td>Jonathan</td>
                </tr>
              </tbody>
            </table>
            <?php } ?>
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
  <script >

    $(document).ready(function(){
      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'
      });
    });

  </script>

</body>
</html>
