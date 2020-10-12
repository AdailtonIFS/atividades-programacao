<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<title>Atividade 01</title>
</head>

<body>
	<div class="app">
		<div class="content shadow-sm">
			<div class="header">
				<h2 class="title">Escolha a sua refeição</h2>
			</div>

			<div class="meal">
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
				<form class="form" action="logica.php" method="POST">

					<div class="pratos">
						<h3>Pratos:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="prato[]" id="vegetariano" value="vegetariano">
								Vegetariano
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="prato[]" id="peixe" value="peixe">
								Peixe
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="prato[]" id="frango" value="frango">
								Frango
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="prato[]" id="carne" value="carne">
								Carne
							</label>
						</div>
					</div>
					<!-- Sobremesa -->
					<div class="sobremesa">
						<h3>Sobremesas:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="sobremesa[]" id="abacaxi" value="abacaxi">
								Abacaxi
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="sobremesa[]" id="sorvetediet" value="sorvetediet">
								Sorvete Diet
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="sobremesa[]" id="mousediet" value="mousediet">
								Mouse Diet
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="sobremesa[]" id="mousechocolate" value="mousechocolate">
								Mouse de Chocolate
							</label>
						</div>
					</div>
					<div class="bebidas">
						<h3>Bebidas: </h3>
						<!-- bebida -->
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="bebida[]" id="cha" value="cha">
								Chá
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="bebida[]" id="sucolaranja" value="sucolaranja">
								Suco de laranja
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="bebida[]" id="sucomelao" value="sucomelao">
								Suco de melão
							</label>
						</div>

						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="bebida[]" id="refridiet" value="refridiet">
								Refrigerante Diet
							</label>
						</div>
					</div>
					<div class="col-12">
						<button type="submit" id="button" class="btn btn-primary">Escolher</button>
					</div>
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