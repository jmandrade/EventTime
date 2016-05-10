<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eventos</title>
<link rel="stylesheet" type="text/css" href="js/jquery.datetimepicker.css"/ >
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.js"></script>
</head>

<body>
<form action="resultado.php" method="post" name="horas">
<table width="561" border="0">
  <tr>
    <td colspan="4"><p>Seleccionar fecha y hora en la que se efectuará el evento.</p>
      <p> <strong>Nota</strong>:  La fecha y hora deben ser
      &quot;GMT 0&quot; (<a href="http://www.timeanddate.com/worldclock/city.html?n=136">Londres</a> - hora de invierno)</p></td>
  </tr>
  <tr>
    <td width="76" valign="top">Fecha: </td>
    <td width="467" colspan="3"><input id="datetimepicker" type="text" name="datetime" /></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td colspan="3"><input type="submit" name="button" id="button" value="Enviar" /></td>
  </tr>
 

</table>
</form>
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