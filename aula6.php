<?php
	$i=0;
	$tam=5;
	$vet= array($tam);
	
	while($i < $tam){
		echo "Valor da variável i: $i <br/>";
		$i++;
	}
	
	echo "<hr/>";
	
	$i=0;
	while($i < $tam){
		$vet[$i]=$i + 10;
		$i++;
	}
	
	$i=0;
	while($i < $tam){
		echo "$vet[$i] <br/>";
		$i++;
	}
	
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Aula 6 de PHP - Loop While</title>
</head>
<body>
</body>
</html>