<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
include "logic.php";
?>

<!DOCTYPE html>
<html>
<head>

    <title>clock_ex</title>


</head>


<body bgcolor= <?php echo $bg ?> >

	<center>
		<h1> It is <?php echo date("g:i")?></h1>
    	<img alt='scenery of matching daytime' src='http://making-the-internet.s3.amazonaws.com/php-<?php echo $img?>.png'>
	</center>

</body>
</html>