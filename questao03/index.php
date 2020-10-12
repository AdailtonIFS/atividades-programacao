<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Edíficio</title>
</head>

<body>
    <div class="app">
        <div class="content shadow-sm">
            <div class="header">
                <h2 class="title">Calcula Taxa</h2>
            </div>


            <div class="container">
                <?php
                $createErrorMessage = isset($_GET['erro']) ? $_GET['erro'] : '';

                $value = isset($_GET['result']) ? $_GET['result'] : '';
                $onwer = isset($_GET['onwer']) ? $_GET['onwer'] : '';
                $apartment = isset($_GET['apartment']) ? $_GET['apartment'] : '';

                if (!empty($createErrorMessage)) {
                ?>

                    <div class="alert alert-danger" role="alert">
                        <strong>
                            <?php
                            echo $createErrorMessage;
                            ?>
                        </strong>
                    </div>

                <?php
                } elseif (!empty($value)) {

                ?>
                    <div class="alert alert-success" role="alert">
                        <strong>
                            <?php
                            echo 'Proprietário: '.$onwer.'<br>';
                            echo 'Apartamento: '.$apartment.'<br>';
                            echo 'Valor do aluguel: '.$value.'<br>';
                            ?>
                        </strong>
                    </div>
                <?php
                }
                ?>
                <form action="logica.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="owner">Informe o nome do propretário</label>
                        <input type="text" name="owner" id="owner" class="form-control" value="<?php echo isset($_SESSION['firstNumber']) ? $_SESSION['firstNumber'] : ""; ?>" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Por favor, informe o nome do proprietário.</small>
                    </div>

                    <div class="form-group">
                        <label for="apartment">Informe o número do apartamento</label>
                        <input type="text" name="apartment" id="apartment" class="form-control" value="<?php echo isset($_SESSION['firstNumber']) ? $_SESSION['firstNumber'] : ""; ?>" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Por favor, digite o número do apartamento.</small>
                    </div>
                    <div class="form-group">
                        <label for="operation">Lista de animais</label>
                        <select class="form-control" name="operation" id="operation">
                            <option value="">Escolha a opção</option>
                            <option value="Gato">1- Gato</option>
                            <option value="Papagaio">2- Papagaio</option>
                            <option value="Chachorro">3- Cachorro</option>
                            <option value="Nenhum">4- Nenhum</option>
                        </select>
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