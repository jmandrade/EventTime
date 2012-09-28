<?php 
$unixTime = $_GET['q'];

$day = date('d', $unixTime); 
$month = date('m', $unixTime);
$year = date('Y', $unixTime);
$hour = date('H', $unixTime);
$minute = date('i', $unixTime);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eventos</title>
<script language="JavaScript">

function changeTime(year, month, day, hour, minute) {
	
	function spanishDate(d){
		
		function pad2(number) {
    		return (number < 10 ? '0' : '') + number
		}
		
		var weekday=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
		var monthname=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
		return weekday[d.getDay()]+" "+d.getDate()+" de "+monthname[d.getMonth()]+" de "+d.getFullYear()+" a las "+pad2(d.getHours())+":"+pad2(d.getMinutes())
}

    eventDate = new Date(year, month, day, hour, minute); //date of the event in GMT
	localDate = new Date(); //Date of the user's computer
	localEventDate = new Date(eventDate); //will hold the date of the event translated to user's date and time
	
	localTimeZone = localDate.getTimezoneOffset(); //get time zone of local user
	
	localEventDate.setMinutes(localEventDate.getMinutes() - localTimeZone); 
    
    return spanishDate(localEventDate);

}
</script>
</head>
<body>
<a href="http://es.engadget.com" target="_new"><img src="http://www.blogcdn.com/es.engadget.com/media/2012/09/2768755886686308.jpeg" border="0" /></a>
<script language="javascript">document.write(changeTime(<?php echo "$year, $month, $day, $hour, $minute"; ?>));</script>

</body>
</html>