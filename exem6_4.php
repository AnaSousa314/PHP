<?php 

function clubes(){//essa função retornará vários valores
	$clubes[] = "São Paulo";
	$clubes[] = "Palmeiras";
	$clubes[] = "Santos";

	return $clubes;
}

//Declaração de uma variavel para receber clubes()

$nomes = clubes();

for ($i=0; $i < sizeof($nomes); $i++) { 
	echo "\$nomes[$i] vale $nomes[$i]<br>";
}

echo "<br><br>";

//$xadrez = ["Peão","Cavalo"]; declarar todos os itens de um array, ou ir colocando um de cada vez

$xadrez[] = "Peão";
$xadrez[] = "Cavalo";


//echo "$xadrez[0]"; imprimir cada item do array, ou imprimi-los todos de uma vez

for ($i=0; $i < sizeof($xadrez); $i++) { 
 	echo "$xadrez[$i] ";
 } 

?>