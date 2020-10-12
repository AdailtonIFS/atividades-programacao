<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Calcular Operações</title>
</head>

<body>
    <div class="app">
        <div class="content shadow-sm">
            <div class="header">
                <h2 class="title">Realiza Operações</h2>
            </div>


            <div class="container">
                <?php
                $criaMessageError = isset($_GET['erro']) ? $_GET['erro'] : '';
                $criaMessageResult = isset($_GET['result']) ? $_GET['result'] : '';
                if (!empty($criaMessageError)) {
                ?>

                    <div class="alert alert-danger" role="alert">
                        <strong>
                            <?php
                            echo $criaMessageError;
                            ?>
                        </strong>
                    </div>

                <?php
                } elseif (!empty($criaMessageResult)) {

                ?>
                    <div class="alert alert-success" role="alert">
                        <strong>
                            <?php
                            echo $criaMessageResult;
                            ?>
                        </strong>
                    </div>
                <?php
                }
                ?>
                <form action="logica.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="firstNumber">Informe o primeiro número</label>
                        <input type="text" name="firstNumber" id="firstNumber" class="form-control" value="<?php echo isset($_SESSION['firstNumber']) ? $_SESSION['firstNumber'] : ""; ?>" aria-describedby="helpFNumber">
                        <small id="helpFNumber" class="text-muted">Por favor, digite o primeiro número aqui.</small>
                    </div>

                    <div class="form-group">
                        <label for="operation">Lista de operações</label>
                        <select class="form-control" name="operation" id="operation">
                            <option value="">Escolha a operação</option>
                            <option value="+"> + (Esta opção soma os dois valores)</option>
                            <option value="-"> - (Esta opção subtrai os dois valores)</option>
                            <option value="*"> x (Esta opção multiplica os dois valores)</option>
                            <option value="/"> / (Esta opção divide os dois valores)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="secondNumber">Informe o segundo número</label>
                        <input type="text" name="secondNumber" id="secondNumber" class="form-control" value="<?php echo isset($_SESSION['secondNumber']) ? $_SESSION['secondNumber'] : ""; ?>" aria-describedby="helpSNumber">
                        <small id="helpSNumber" class="text-muted">Por favor, digite o segundo número aqui.</small>
                    </div>
                    <button type="submit" id="button" class="btn btn-primary">Escolher</button>
                </form>
            </div>

            <div class="footer">
                <span class="developedby" style="color: rgb(155, 155, 155);">Desenvolvido com <i class="fa fa-heart" aria-hidden="true" style="color: red;"></i> por
                    <strong style="color: black;">Adailton</strong>
                </span>
            </div>
        </div>
    </div>
</body>

</html>