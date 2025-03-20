<?php
	//IF-ELSE
	$nota=30;

	if($nota >= 60){
		echo "<font color=green>Aprovado</font>";
	}else if($nota >=40){
		echo "<font color=orange>Recuperacção</font>";
	}else {
		echo "<font color=red>Reprovado</font>";
	}			
	
	if(($nota >= 40) & ($nota <= 60)) {
		echo "<hr/><font color=green>Aluno selecionado</font>";
	} else {
		echo "<hr/>Fora da faixa";
	}	
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Aula 4 de PHP - Comando condicional IF ELSE</title>
</head>
<body>
</body>
</html>