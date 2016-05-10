<?php

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year']; 
$hour = $_POST['hour']; 
$minute = $_POST['minute']; 

$result = mktime($hour, $minute, 0, $month, $day, $year);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eventos</title>
</head>

<body>

<table width="650" border="0">
  <tr>
    <td>El evento se realizará el: <iframe frameborder="0" height="55" width="400" src="<?php echo 'http://ext.weblogsinc.com/engadget/es/fecha.php?q='.$result; ?>">Tu navegador no soporta para iframes</iframe> <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>Copiar y pegar el código de abajo en la <strong>fuente</strong> del artículo.</td>
  </tr>
  <tr>
    <td><textarea name="resultado" cols="80" rows="3" readonly="readonly"><div style="text-align: center;"><iframe frameborder="0" height="55" width="400" src="<?php echo 'http://ext.weblogsinc.com/engadget/es/fecha.php?q='.$result; ?>">Tu navegador no soporta iframes</iframe></div></textarea></td>
  </tr>
</table>



</body>
</html>
