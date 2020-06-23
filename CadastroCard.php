<?php include "cabecalho.php" ?>
<?php include "nav.php" ?>

<body class="pg cad">

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
                                                <textarea id="desc" class="materialize-textarea white-text" data-length="120" require> </textarea>
                                                <label for="desc" class="active white-text">Descrição</label>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="center">
                                        <a style="margin-right: 2em;" href="Inicial.php" class="waves-effect waves-light btn white grey-text">Cancelar</a>
                                        <a href="#" class="waves-effect waves-light btn white laranja-text ">Criar</a>

                                    </div>
                                </div>





</body>
<script src="javascript/base.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" />

    </html>