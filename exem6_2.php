<?php 
function maiusculo($string){
	$string = strtoupper($string);/*ele não faz alteração em letras acentuadas, para isso fazemos o str_replace, que é a troca de algo selecionado na string conforme abaixo*/
	$string = str_replace("á", "Á", $string);/*o 1º elemento é o que será procurado na string, o 2º elemento é o que ficará no lugar do 1º elemento, o 3º elemento onde será feita a busca e a troca*/
	$string = str_replace("é", "É", $string);
	$string = str_replace("í", "Í", $string);
	$string = str_replace("ó", "Ó", $string);
	$string = str_replace("ú", "Ú", $string);
	$string = str_replace("â", "Â", $string);
	$string = str_replace("ê", "Ê", $string);
	$string = str_replace("ô", "Ô", $string);
	$string = str_replace("û", "U", $string);
	$string = str_replace("î", "I", $string);
	$string = str_replace("ã", "Ã", $string);
	$string = str_replace("õ", "Õ", $string);
	$string = str_replace("ç", "Ç", $string);
	$string = str_replace("à", "À", $string);

	return $string;
}


echo maiusculo("José Antônio");

?>

