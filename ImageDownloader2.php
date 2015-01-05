<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Função PHP Salvar Imagens</title>
</head>
<body>
<div>
	<?php

		function save_image($img,$dir){

			// COMPLETE PATH
	  		$fullpath = "{$dir}".basename($img);
	  		
	  		// METHODS STREAM
	  		$context = stream_context_create(
	   			array(
		    		'http' => array(
			     		'ignore_errors' => true,
			     		'header' => "User-Agent:MyAgent/1.0\r\n"
	    			)
	   			)
	  		);

	  		// SAVING THE FILES
	  		file_put_contents($fullpath, file_get_contents($img, FALSE, $context));
		}
	?>
</div>
</body>
</html>
