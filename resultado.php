<?php

$datetime=$_POST['datetime'];

list($day, $month, $year, $hour, $minute) = explode("/", $datetime); 

$day = (int)$day;
$month = (int)$month;
$year = (int)$year;
$hour = (int)$hour;
$minute = (int)$minute;

$month = $month -1;

$result = mktime($hour, $minute, 0, $month, $day, $year);

?>
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

    <title>Navbar Template for Bootstrap</title>

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

        	<div class="col-sm-6 col-sm-offset-3">
				<h3>El evento se realizará el:</h3>
			</div>

			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center" style="background-color: white;">
				<iframe frameborder="0" height="55" width="400" src="<?php echo 'http://ext.weblogsinc.com/engadget/es/fecha.php?q='.$result; ?>">Tu navegador no soporta para iframes</iframe>
			</div>

			<div class="col-xs-12">
				&nbsp;
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<p>Copia y pega el código de abajo en la <strong>fuente</strong> del artículo.</p>
			</div>

			<textarea class="form-control" name="resultado" cols="80" rows="3" readonly="readonly" style="background-color: white;"><div style="text-align: center;"><iframe frameborder="0" height="70" width="400" src="<?php echo 'http://ext.weblogsinc.com/engadget/es/fecha.php?q='.$result; ?>">Tu navegador no soporta iframes</iframe></div></textarea>
			<br>
			<div class="col-sm-8 col-sm-offset-2">
				<p>Otro evento:</p>
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
			</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>

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
