
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenido al juego de Piedra, Papel y Tijera</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Juego</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br><br><br>
    <div class="container">
      <h2>Bienvenido al juego de Piedra, Papel y Tijera</h2>
      <br>
      <form>
      <div class="row">          
          <div class="col-md-4">
            <div class="form-group">
            <label for="jugada_del_usuario">Selecciona el valor de jugada del usuario:</label>
                <select class="form-control" id="jugada_del_usuario">
                  <option value="">Seleccione la Jugada</option>
                  <option value="1">Piedra</option>
                  <option value="2">Papel</option>
                  <option value="3">Tijera</option>
                </select>
                <div class="alert alert-danger" role="alert" style="display: none;" id="Msini"></div>
                
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success" onclick="Resultado();">Jugar !!</button>

            </div>    
          </div>
          <div class="col-md-8">
            <div class="alert alert-success" role="alert"><h2 id="mssgresultado"></h2></div>             
            <div id="tablaresultados"></div>            
            <div class="col-md-6">
              <h4>La jugada del ordenador es</h4>
              <div id="ordenadorimg"></div>
            </div>
            <div class="col-md-6">
              <h4>La jugada del Usuario es</h4>
              <div id="usuarioimg"></div>
            </div>             
          </div>
          
      </div> 
      </form>  
    </div><!-- /.container -->
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>
