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
            <h2 class="center light-blue-text"><i class="material-icons">devices</i></h2>
            <h5 class="center">Cadastrar Equipamentos</h5>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12 l6">
                    <input id="icon_prefix" type="text">
                    <label for="icon_prefix">Nome do Equipamento</label>
                  </div>
                  <div class="input-field col s12 l6">
                    <select>
                      <option value="" disabled selected>Selecione...</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                    <label>Quantidade</label>
                  </div>
                  <button class="waves-effect waves-light btn" type="submit">Cadastrar</button>
                </div>
              </form>
            </div>
            <h5 class="center">Lista de Equipamentos</h5>
            <table class="striped centered">
              <thead>
                <tr>
                  <th>Equipamento</th>
                  <th>Quantidade</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                </tr>
                <tr>
                  <td>Alan</td>
                  <td>Jellybean</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Lollipop</td>
                </tr>
              </tbody>
            </table>
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
