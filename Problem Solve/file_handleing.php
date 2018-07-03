<!DOCTYPE html>
<html>
<head>
	<title>File Handleing</title>
</head>
<body>
	<?php 
		echo readfile("abc.txt");
	?>
	<br>
	<?php 
		$my_file = fopen("abc.txt", "r");

		echo fread($my_file, filesize("abc.txt"))	;
		fclose($my_file);
	?>
	<br>
	<?php 
		$my_file = fopen("abc.txt", "w");
		$txt = "asfdgsfhhsh ";
		fwrite($my_file, $txt);
		$txt = " poiuytrewq ";
		fwrite($my_file, $txt);
		$txt = " mnhgfdwqzxfgui";
		fwrite($my_file, $txt);

		fclose($my_file);
		echo readfile("abc.txt");
	?>
	<br>
	
</body>
</html>
