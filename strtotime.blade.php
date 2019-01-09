
<!-- Get date and time value from database and show just Date -->
{{ date('d', strtotime($notice->PUBLISH_START_DATE)) }}

<!-- Get date and time value from database and show just Month -->
{{ date('M', strtotime($notice->PUBLISH_START_DATE)) }}

<!-- Get date and time value from database and show just Date/Month/Year -->
{{ date('d/M/y', strtotime($notice->PUBLISH_START_DATE)) }}

<!-- Get date and time value from database and show just Month-Year -->
{{ date('M-Y', strtotime($notice->PUBLISH_START_DATE)) }}


<!-- Get full date and show in new format -->
{{ date("Y-m-d", strtotime('dd/mm/YYYY')) }}


<!-- Get date value and show with some logical calculation -->
<?php
	echo(strtotime("now") . "<br>");
	echo(strtotime("3 October 2005") . "<br>");
	echo(strtotime("+5 hours") . "<br>");
	echo(strtotime("+1 week") . "<br>");
	echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
	echo(strtotime("next Monday") . "<br>");
	echo(strtotime("last Sunday"));
?>


<!-- Get full date and show in new format -->
<?php
	$date = '25/05/2010';
	$date = str_replace('/', '-', $date);
	echo date('Y-m-d', strtotime($date));
?>


<!-- Get Current date and time then show in new format -->
<?php 
	// PHP program to demonstrate the strtotime()  
	  
	// prints current time in second  
	// since now means current  
	echo strtotime("now"), "\n";  
	  
	// prints the current time in date format  
	echo date("Y-m-d", strtotime("now"))."\n"; 
?> 
