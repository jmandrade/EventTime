<?php 
$unixTime = $_GET['q']; //get the Unix time from the URL

if (!isValidTimeStamp($unixTime)){
	header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
	die();
}

//gets the day, month, year and time from Unix time
$day = date('d', $unixTime); 
$month = date('m', $unixTime);
$year = date('Y', $unixTime);
$hour = date('H', $unixTime);
$minute = date('i', $unixTime);

function isValidTimeStamp($timestamp)
{
    return ((string) (int) $timestamp === $timestamp) 
        && ($timestamp <= PHP_INT_MAX)
        && ($timestamp >= ~PHP_INT_MAX);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eventos</title>
<script language="JavaScript">

function changeTime(year, month, day, hour, minute) {
	
	function spanishDate(d){
		
		//Makes number be two digits: 7 = 07
		function pad2(number) {
    		return (number < 10 ? '0' : '') + number
		}
		
		//Days of the week in Spanish
		var weekday=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
		
		//Months of the year in Spanish
		var monthname=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
		
		//Returns the result translated to Spanish
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
    <!-- Font type consistent with Engadget's design -->
    <p style='font-family:"proxima-nova","proxima-nova-1","proxima-nova-2","Proxima Nova","Segoe UI",Helvetica,Arial,sans-serif;'>
    
        <!-- Image and link to Engadget Spanish to avoid other people using the script on their sites -->
        <a href="http://es.engadget.com" target="_new">
            <img src="http://o.aolcdn.com/os/engadget/engadget-es/Engadget_ES_evento.jpg" border="0" />
        </a>
        
        <!-- Call to the script that grabs the user location and displays event date based on that timezone -->
        <script language="javascript">
            document.write(changeTime(<?php echo "$year, $month, $day, $hour, $minute"; ?>));
        </script>
    </p>
</body>
</html>