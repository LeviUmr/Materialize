<?php include "cabecalho.php" ?>
<?php

$bd = new SQLite3("banco.db");

$sql = "SELECT * FROM cards";
         
$cards = $bd->query($sql);
?>

<body class=" indigo lighten-5 inicial">
	<?php include "nav.php" ?>

	<!-- card -->
	<div class="row">
		<?php 
		while($card = $cards->fetchArray()) : ?>
			<div class="col s3">
				<div class="card Large hoverable">
					<div class="card-image">
						<img src="<?= $card["imagem"] ?>" alt="" />
						<div class="card-content">
							<div class="row">
								<p class="black-text valign-wrapper" style="font-family: 'Reem Kufi', sans-serif;font-size:1.7rem">
									<i class="material-icons amber-text">star</i> <?= $card["nome"] ?> </p>

								<p class="black-text" style="font-family: reem kufi; font-size:1.2rem"><?= $card["descricao"] ?>
								</p>

							</div>
							<div class="card-action">
								<p class="right-align">
									<a href="<?= $card["link"] ?>" style="font-family: reem kufi;" class=" valign-wrapper white-text btn lorange ">Mostrar Mais </a>
								</p>

							</div>
						</div>
					</div>
				</div>

			</div>
		<?php endwhile ?>


</body>
<script src="javascript/base.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" />

</html>