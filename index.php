<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eventos</title>
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
  	<td>Fecha: </td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="76">&nbsp;</td>
    <td width="50" align="left">Día</td>
    <td width="100" align="left">Mes</td>
    <td width="317" align="left">Año</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left"><select name="day" id="day">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select></td>
    <td align="left"><select name="month" id="month">
      <option value="00">Enero</option>
      <option value="01">Febrero</option>
      <option value="02">Marzo</option>
      <option value="03">Abril</option>
      <option value="04">Mayo</option>
      <option value="05">Junio</option>
      <option value="06">Julio</option>
      <option value="07">Agosto</option>
      <option value="08">Septiembre</option>
      <option value="09">Octubre</option>
      <option value="10">Noviembre</option>
      <option value="11">Diciembre</option>
    </select></td>
    <td align="left"><select name="year" id="year">
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>Hora: </td>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">Hora</td>
    <td align="left">Minutos</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left"><select name="hour" id="hour">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
    </select></td>
    <td align="left"><select name="minute" id="minute">
      <option value="00">00</option>
      <option value="15">15</option>
      <option value="30">30</option>
      <option value="45">45</option>
    </select></td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td align="center">&nbsp;</td>
    <td colspan="3" align="left"><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>

</table>
</form>

</body>
</html>
