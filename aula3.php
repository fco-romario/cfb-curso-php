<?php
	//Arrays
	$vet=array(7);
	$vet2=array(100,200,300);
	$vet3=array("nome"=> "Bruno", "cidade"=>"BH","curso"=>"PHP");
	$mat=array(
		array("carro1", 65000),
		array("carro2", 35000),
		array("carro3", 50000),
	);
	$i=6;

	
	
	
	$vet[0]="Carro";
	$vet[1]="Avião";
	$vet[2]="Navio";
	$vet[3]="Moto";
	$vet[4]="Ônibus";
	$vet[5]=123456;
	$vet[6]=$vet3["nome"];
	
	echo "Elemento de índice $i = ".$vet[$i]."<br/>";
	echo "Nome: ".$vet3["nome"]." - Cidade: ".$vet3["cidade"]." - Curso: ".$vet3["curso"]."</br>";
	echo "Carro: ".$mat[0][0]." - Valor: ".$mat[0][1]."<br>";
	echo "Carro: ".$mat[1][0]." - Valor: ".$mat[1][1]."<br>";
	echo "Carro: ".$mat[2][0]." - Valor: ".$mat[2][1];
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Aula 3 de PHP - Vetores / Arrays</title>
</head>
<body>
</body>
</html>