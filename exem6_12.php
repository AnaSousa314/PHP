<?php 

class Loja 
{
	var $itens;
	function adiciona($codigo,$quantidade)
	{
		//isset informa se a variavel foi iniciada
		//$this serve para referenciar o objeto usado, algum membro da classe
		if (isset($this->itens[$codigo])) {
			$this->itens[$codigo] += $quantidade;
		}else{
			$this->itens[$codigo] = $quantidade;
		}
	}

	function remove($codigo,$quantidade){
		if ($this->itens[$codigo]>$quantidade) {
			$this->itens[$codigo] -= $quantidade;
			return true;
		}else{
			return false;
		}
	}
}
$estoque = new Loja;

$estoque->adiciona("bermuda",2);
echo "A loja possui ".$estoque->itens["bermuda"]." bermudas";

echo "<br><br>";
$estoque->adiciona("calça",4);
echo "A loja possui ".$estoque->itens["calça"]." calças<br>";

$estoque->remove("bermuda",1);
echo "A loja agora possui ".$estoque->itens["bermuda"]." bermuda";


?>