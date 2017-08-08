
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Eventos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/jquery.datetimepicker.css"/ >

  </head>

  <body>
    <div class="container">
    <br>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="text-center">
          <h1>Eventos en hora local</h1>
          <p>Seleccionar fecha y hora en la que se efectuará el evento.</p>
          <p> <strong>Nota</strong>:  La fecha y hora deben ser
                &quot;UTC&quot; (<a href="http://www.timeanddate.com/worldclock/city.html?n=136">Londres</a> - hora de invierno)</p>
          <form action="resultado.php" method="post" name="horas">
            <div class="col-sm-6 col-sm-offset-3">
              <input id="datetimepicker" type="text" name="datetime" class="form-control" />
            </div>
            <br>
            <br>
            <div class="col-sm-6 col-sm-offset-3">
              <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary" />
            </div>
          </form>
          <br>
          <br>
        </div>
      </div>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.datetimepicker.js"></script>
    <script type="text/javascript">
      $(function(){
        $('#datetimepicker').datetimepicker({
          format:'d/m/Y/H/i',
            lang:'es'
        });
      });
    </script>
  </body>
</html>
