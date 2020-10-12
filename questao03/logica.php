<?php

$owner = isset($_POST['owner']) ? $_POST['owner'] : '';
$apartment = isset($_POST['apartment']) ? $_POST['apartment'] : '';
$operation = isset($_POST['operation']) ? $_POST['operation'] : '';

if (!empty($owner) && !empty($apartment) && !empty($operation)) {
    $treatedOwner = is_numeric(filter_var($owner, FILTER_SANITIZE_NUMBER_INT)) ? '' : $owner;
    $treatedApartment = is_numeric($apartment) ? $apartment : '';
    var_dump($treatedApartment);

    if (!empty($treatedApartment) && !empty($treatedOwner)) {

        $value = 350;
        $tax = [
            'Gato' => 30,
            'Papagaio' => 12,
            'Cachorro' => 50,
            'Nenhum' => -20
        ];
        $result = $value + $tax[$operation];
        header("Location: http://localhost/atividade01/questao03/index.php?result=$result&onwer=$treatedOwner&apartment=$treatedApartment");
    } else { 
        session_start();

        header("Location: http://localhost/atividade01/questao03/index.php?erro=Insira dados válidos, por favorzinho.");
    }
} else {
    header("Location: http://localhost/atividade01/questao03/index.php?erro=Preencha todos os campos, por favorzinho.");
}
