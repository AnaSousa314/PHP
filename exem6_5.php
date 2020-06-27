<?php
	/*Dessa forma o tempo é apresentado sem nenhuma formatação
	$agora = time();
	echo "$agora";

echo "<br>";
	
	Aqui apresentamos a data formatando-a
	"wday" = dia corrente na semana. OBS: se inicia em 0
	"mday" = dia corrente no mês
	"mon" = mês corrente
	"year" = ano corrente	
	
	$data = getdate();
	//echo $data["mday"]."/".$data["mon"]."/".$data["year"];

	Cálculo com data
	$nasc = 1995;
	$idade = $data["year"] - $nasc;
	echo "$idade";
*/
	


	function retorna_data(){
		$agora = time();
		$data = getdate();
		
		//Altera os dias como são especificados no sitema para strings de dias como conhecemos
		if ($data["wday"]==0) {echo "Domingo, ";}
		elseif ($data["wday"]==1) {echo "Segunda, ";}
		elseif ($data["wday"]==2) {echo "Terça, ";}
		elseif ($data["wday"]==3) {echo "Quarta, ";}
		elseif ($data["wday"]==4) {echo "Quinta, ";}
		elseif ($data["wday"]==5) {echo "Sexta, ";}
		elseif ($data["wday"]==6) {echo "Sábado, ";}
		
		//Altera os meses de números para strings como conhecemos no portugues, e declara a variavel mes para receber essa string
/*
		if ($data["mon"]==1) {$mes = "Janeiro";}
		elseif ($data["mon"==2]) {$mes = "Fevereiro";}
		elseif ($data["mon"==3]) {$mes = "Março";}
		elseif ($data["mon"==4]) {$mes = "Abril";}
		elseif ($data["mon"==5]) {$mes = "Maio";}
		elseif ($data["mon"==6]) {$mes = "Junho";}
		elseif ($data["mon"==7]) {$mes = "Julho";}
		elseif ($data["mon"==8]) {$mes = "Agosto";}
		elseif ($data["mon"==9]) {$mes = "Setembro";}
		elseif ($data["mon"==10]) {$mes = "Outubro";}
		elseif ($data["mon"==11]) {$mes = "Novembro";}
		elseif ($data["mon"==12]) {$mes = "Dezembro";}
*/

		//O IF não funcionou corretamente, por isso mudei para SWITCH
		switch ($data["mon"]) {
			
			case 1:
				$mes = "Janeiro";
				break;
			case 2:
				$mes = "Fevereiro";
				break;
			case 3:
				$mes = "Março";
				break;
			case 4:
				$mes = "Abril";
				break;
			case 5:
				$mes = "Maio";
				break;
			case 6:
				$mes = "Junho";
				break;
			case 7:
				$mes = "Julho";
				break;
			case 8:
				$mes = "Agosto";
				break;
			case 9:
				$mes = "Setembro";
				break;
			case 10:
				$mes = "Outubro";
				break;
			case 11:
				$mes = "Novembro";				
				break;	
			case 12:
				$mes = "Dezembro";
				break;			
		}

		//Cria a variavel data_atual para receber a data corrente de acordo com as condiçõoes acima
		$data_atual = $data["mday"]." de ".$mes." de ".$data["year"];

		return $data_atual;
	}

//Cria uma variavel para receber a função
$hoje = retorna_data();
echo "$hoje";

echo "<br><br>";
//Ou podemos imprimi-la diretamente sem uma variavel para recebe-la
echo retorna_data();

?>