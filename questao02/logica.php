<?php

$firstNumber = isset($_POST['firstNumber']) ? str_replace(' ', '', $_POST['firstNumber']) : '';
$operation = isset($_POST['operation']) ? str_replace(' ', '', $_POST['operation']) : '';
$secondNumber = isset($_POST['secondNumber']) ? str_replace(' ', '', $_POST['secondNumber']) : '';


$result;

if (!empty($firstNumber) && !empty($operation) && !empty($secondNumber)) {
    echo $treatedFirstNumber = str_replace(',', '.', $firstNumber);
    echo $treatedSecondNumber = str_replace(',', '.', $secondNumber);
    

    if (is_numeric($treatedFirstNumber) && is_numeric($treatedSecondNumber)) {
        switch ($operation) {
            case '+':
                $result = $treatedFirstNumber + $treatedSecondNumber;
                break;
            case '-':
                $result = $treatedFirstNumber - $treatedSecondNumber;
                break;
            case '*':
                $result = $treatedFirstNumber * $treatedSecondNumber;
                break;
            case '/':
                $result = $treatedFirstNumber * $treatedSecondNumber;
                break;

            default:
                break;
        }
        session_start();
        $_SESSION = array();
        header("Location: http://localhost/atividade01/questao02/index.php?result= O resultado é $result");
    } else {
        session_start();
        $_SESSION = array();
        $_SESSION['firstNumber'] = trim($firstNumber);
        $_SESSION['secondNumber'] = trim($secondNumber);
        header("Location: http://localhost/atividade01/questao02/index.php?erro= Digita um número, por favorzinho.");
    }
} else {
    session_start();
    $_SESSION = array();
    $_SESSION['firstNumber'] = trim($firstNumber);
    $_SESSION['secondNumber'] = trim($secondNumber);
    
    header("Location: http://localhost/atividade01/questao02/index.php?erro= Preencha todos os campos, por favorzinho.");
}
