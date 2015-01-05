<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste Salvar Imagem</title>
</head>
<body>
<div>
	<?php
		// URL FOR THE IMAGE TO DOWNLOAD
		$url = "http://www.fundosanimais.com/Imagens/imagens-lobos.jpg";

		// DIRECTORY TO SAVE THE IMAGE
		$dir = './img/';

		// NAME OF THE IMAGE
		$name = 'imagem';

		// NAME OF THE EXTENSION FILE TO DOWNLOAD
		$ext = '.jpg';
		

		// METHODS USED
		$postImageName = mysql_real_escape_string($name);
		$postImageUrl = mysql_real_escape_string($url);
		$postImageDir = mysql_real_escape_string($dir);
		$postImageExt = mysql_real_escape_string($ext);

		// CLEANING THE EMPTY SPACES IN IMAGE NAME
		$postImageName = str_replace(" ","", $postImageName);

		// CREATING THE RAW IMAGE FROM THE DOWNLOAD ORIGIN
		@$rawImage = file_get_contents($postImageUrl);

		// TESTING THE RAW IMAGE
		if ($rawImage) {
			file_put_contents($postImageDir.$postImageName.$postImageExt, $rawImage);
			echo 'Salvou essa Droba';
		}
		else
		{
			echo 'Erro Fatal do xindôlêlê';
		}
	?>
</div>
</body>
</html>
