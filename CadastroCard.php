<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="Estilos/Estilo.css">
    <link rel="shortcut icon" href="favicon.ico" />

</head>

<body class=" indigo lighten-5">
    <nav>
        <nav class="nav-extended laranja">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right">

                    <li><a href="CadastroCard.php" style="font-size:1rem;font-family :revalia;decorations:underline" class="cinza-text">Novo
                            Produto</a></li>
                    <li><a href="Inicial.php" style="font-size:1rem;font-family :revalia" class="cinza-text"
                            style="text-decoration:underline;">Produtos</a></li>
                    <li><a href="Carrinho.php" style="font-size:1rem;font-family :revalia"
                            class="cinza-text  valign-wrapper">Carrinho <i
                                class="material-icons">add_shopping_cart</i></a></li>
                    <li><a href="Usuario.php" style="font-size:1rem;font-family :revalia"
                            class="cinza-text">Registrar-se/Entrar</a></li>

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

        <div style="font-family: reem-kufi,sans-serif" class="row">
            <div class="col s8 offset-s2">
                <div class="card laranja">
                    <div class="card-content white-text">
                        <span class="card-title center">Cadastro de produtos</span>
                        <div class="row">


                            <div class="row">
                                <form class="col s10 offset-s1">
                                    <div class="row">
                                        <div class="input-field col s8 white-text offset-s2">
                                            <input id="nome" type="text" data-length="10">
                                            <label for="nome" class="white-text">Nome do Produto</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <form class="col s10 offset-s1">
                                            <div class="row">
                                                <div class="input-field col s8 white-text offset-s2">
                                                    <input id="valor" type="number" data-length="10">
                                                    <label for="valor" class="white-text">Valor do Produto</label>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="input-field col s8 offset-s2">
                                                    <textarea id="desc" class="materialize-textarea white-text"
                                                        data-length="120" require> </textarea>
                                                    <label for="desc" class="active white-text">Descrição</label>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="center">
                                            <a style="margin-right: 2em;" href="Inicial.php"
                                                class="waves-effect waves-light btn white grey-text">Cancelar</a>
                                            <a href="#" class="waves-effect waves-light btn white laranja-text ">Criar</a>

                                        </div>
                                    </div>





</body>
<script src="base.js">
</script>

</html>