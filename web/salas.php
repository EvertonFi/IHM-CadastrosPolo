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
            <h5 class="center">Cadastrar Salas</h5>
            <div class="row">
              <form class="col s12 l12">
                <div class="row">
                  <div class="input-field col s12 l12">
                    <input id="sala" type="text">
                    <label for="icon_prefix">Nome da Sala</label>
                    <a href="#!" class="waves-effect waves-light btn" id="btn_cadastro" onclick="Cadastro()">Cadastrar</a>
                  </div>
                </div>
              </form>
            </div>
            <div id="resultado"></div>
            <h5 class="center">Lista de Salas</h5>
            <div id="tabela">
              
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
  <script>
    function Cadastro(){
      var nome = document.getElementById('sala').value;
      $.ajax({
        method: "POST",
        url: "ajax/salas.php",
        data: { 
          sala: nome 
        },
        beforeSend : function(){
          $("#btn_cadastro").html("Carregando...");
        }
      })
      .done(function(msg){
        $("#btn_cadastro").html("Cadastra");
        if (msg == 0) {
          $("#resultado").html("Não foi possivel cadastra!!!");
        }else if (msg == 1) {
          $("#resultado").html("Cadastrado com Sucesso!");
        }
        Lista();
      })
    }

    $(document).ready(function(){
      Lista();
    });

    function Lista(){
      $.ajax({
        method: "POST",
        url: "ajax/listsalas.php"
      })
      .done(function(msg){
        $("#tabela").html(msg);
      })
    }
  </script>

</body>
</html>
