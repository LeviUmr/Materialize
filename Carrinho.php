<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carrinho</title>
    <link rel="stylesheet" href="Estilos/Estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
	<nav>
		<nav class="nav-extended laranja">
			<div class="nav-wrapper" >
				<ul id="nav-mobile" class="right">
					
					<li><a href="CadastroCard.php" style="font-size:1rem;font-family :revalia" class="cinza-text"  >Novo Produto</a></li>
					<li><a href="Inicial.php" style="font-size:1rem;font-family :revalia" class="cinza-text"  style="text-decoration:underline;">Produtos</a></li>
					<li><a href="Carrinho.php" style="font-size:1rem;font-family :revalia" class="cinza-text  valign-wrapper" >Carrinho <i class="material-icons">add_shopping_cart</i></a></li>
					<li><a href="Usuario.php" style="font-size:1rem;font-family :revalia" class="cinza-text"  >Registrar-se/Entrar</a></li>
					
				</ul>
			</div>
			<div class="nav-header center">
				<h1 class=" cinza-text" style="font-family: Revalia">MotorShaft</h1>
			</div>
			<div class="nav-content  Cst ">
				<ul class="tabs tabs-transparent">
					<li class="tab"><a href=""><i class="material-icons cinza-text ">sort</i></a></li>
				</ul>
			</div>
		</nav>
    </div>

    <div class="">
        <div class="row tabela">
            <div class="col s1"></div>

            <div class="row"></div>
            <div class="row">
                <div class="col s10 offset-s1">

                    <table class="striped">
                        <thead>
                            <tr>
                                <th class="black-text">Produto</th>
                                <th class="black-text">Descrição</th>
                                <th class="black-text">Preço</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="nome">Produtos</td>
                                <td><a class="desc" href="">Produto</a></td>

                                <td id="valor">5000</td>

                            </tr>
                            <tr>
                                <td id="nome">Produtos</td>
                                <td><a class="desc" href="">Produto</a></td>

                                <td id="valor">5000</td>

                            </tr>
                            <tr>
                                <td id="nome">Produtos</td>
                                <td><a class="desc" href="">Produto</a></td>

                                <td id="valor">5000</td>

                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <a href="#" id="finalizar" class=" waves-effect btn laranja ">
                            <h6>Finalizar Compra</h6> 
                        </a>
                    </div>

                </div>
            </div>
        </div>
</body>

<script src="base.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" /> </html>