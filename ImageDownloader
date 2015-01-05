<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste Salvar Imagem</title>
</head>
<body>
<div>
	<?php
		$url = "http://www.fundosanimais.com/Imagens/imagens-lobos.jpg";
		$dir = './img/';
		$name = 'imagem';
		$ext = '.jpg';
		
		$postImageName = mysql_real_escape_string($name);
		$postImageUrl = mysql_real_escape_string($url);
		$postImageDir = mysql_real_escape_string($dir);
		$postImageExt = mysql_real_escape_string($ext);

		$postImageName = str_replace(" ","", $postImageName);

		@$rawImage = file_get_contents($postImageUrl);

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
