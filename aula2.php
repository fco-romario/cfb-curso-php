<?php

	//Variáveis
	$vnome="Bruno";
	$vnum=10;
	$vnum=2.5;
	$soma=0;
	
	//Constantes
	define("cnome", "Bruno");
	define("ver", PHP_VERSION);
	define("dir", __dir__);
	
	echo "Nome: $vnome<br/>";
	$vnome="Campos";
	echo "Nome: $vnome<br/>";
	$vnome="Bruno";
	echo "Nome: ".$vnome."<br/>";
	$soma=10+20;
	echo "Soma: ".$soma;
	
	echo "<hr>";
	echo "Constante cnome: ".cnome."<br/>";
	
	//constantes predeterminada
	echo "Nome do arquivo: ".__file__."<br/>";
	echo "Versão do PHP: ".ver."<br/>";
	echo "Pasta: ".dir."<br/>";
	
	echo "Versão do SO: ".PHP_OS."<br/>";
	echo "Número da linha: ".__LINE__."<br/>";
	
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Aula 2 de PHP - Constantes e Variáveis</title>
	</head>
	<body>
	</body>
</html>