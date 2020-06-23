<?php include "cabecalho.php" ?>
<?php
$card = [
	"nome" => "Motores",
	"descrição" => "",
	"imagem" => "https://cdn.pixabay.com/photo/2017/03/19/18/51/tuning-2157354_960_720.jpg",
	"link" => ""
];

$card1 = [
	"nome" => "Turbo",
	"descrição" => "",
	"imagem" => "https://media.istockphoto.com/photos/turbocharger-structure-scheme-picture-id649330904",
	"link" => ""
];

$card2 = [
	"nome" => "Filtros de Ar",
	"descrição" => "",
	"imagem" => "https://cdn.pixabay.com/photo/2018/01/06/21/57/motor-3066046_960_720.jpg",
	"link" => ""
];
$card3 = [
	"nome" => "Cilindros",
	"descrição" => "",
	"imagem" => "https://media.istockphoto.com/photos/engine-pistons-crankshaft-mechanism-3d-render-picture-id1059972498",
	"link" => ""
];

$cards = [$card, $card1, $card2, $card3];
?>

<body class=" indigo lighten-5 inicial">
	<?php include "nav.php" ?>

	<!-- card -->
	<div class="row">
		<?php 
		foreach($cards as $card) : ?>
			<div class="col s3">
				<div class="card Large hoverable">
					<div class="card-image">
						<img src="<?= $card["imagem"] ?>" alt="" />
						<div class="card-content">
							<div class="row">
								<p class="black-text valign-wrapper" style="font-family: 'Reem Kufi', sans-serif;font-size:1.7rem">
									<i class="material-icons amber-text">star</i> <?= $card["nome"] ?> </p>

								<p class="black-text" style="font-family: reem kufi; font-size:1.2rem"><?= $card["descrição"] ?>
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
		<?php endforeach ?>


</body>
<script src="javascript/base.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" />

</html>