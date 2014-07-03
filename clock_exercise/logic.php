<?php

	date_default_timezone_set('America/New_York');


	if (time() > strtotime("05:00:00") and time() < strtotime('10:59:00')) {
		$img = "morning";	
		$bg = "#865f86";
	}
	
	elseif (time() > strtotime("11:00:00") and time() < strtotime("15:59:00")) {
		$img = "afternoon";	
		$bg = "#2c87c8";	
	}
	elseif (time() > strtotime("16:00:00") and time() < strtotime("19:59:00")){
		$img = "evening";
		$bg = "#c7b02f";		
	}
	else {
		$img = "night";
		$bg = "180629";
	}
	
?>	