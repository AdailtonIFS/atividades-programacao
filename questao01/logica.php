<?php
$prato = isset($_POST['prato']) ? $_POST['prato'] : '';
$sobremesa = isset($_POST['sobremesa']) ? $_POST['sobremesa'] : '';
$bebida = isset($_POST['bebida']) ? $_POST['bebida'] : '';

if (!empty($prato) && !empty($sobremesa) && !empty($bebida)) {
	
    if (sizeof($prato) == 1 && sizeof($sobremesa) == 1 && sizeof($bebida) == 1) {
		$result;
        $calorias = [
            'vegetariano' => 180,
            'peixe' => 230,
            'frango' => 250,
            'carne' => 350,
            'cha' => 20,
            'sucolaranja' => 70,
            'sucomelao' => 100,
            'refridiet' => 65,
            'abacaxi' => 75,
            'sorvetediet' => 110,
            'mousediet' => 170,
            'mousechocolate' => 200
		];
		foreach ($calorias as $cal => $valor) {
			if($prato[0] == $cal){
				echo $prato[0].' = '. $cal .' => '. $valor.'<br>';
				$result = $valor;
			}
			if ($sobremesa[0] == $cal) {
				echo $sobremesa[0].' = '. $cal .' => '. $valor . '<br>';
				$result += $valor;
			}
			if ($bebida[0] == $cal) {
				echo $bebida[0].' = '. $cal .' => '. $valor . '<br>';
				$result += $valor;
			}
		}
        header("Location: http://localhost/atividade01/questao01/index.php?result=Esse pedido traz $result calorias.");
    } else {
        header("Location: http://localhost/atividade01/questao01/index.php?erro=Escolha apenas uma opção de cada, por favorzinho.");
    }
} else {
    header("Location: http://localhost/atividade01/questao01/index.php?erro=Preencha todos os campos, por favorzinho.");
}
