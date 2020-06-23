<?php include "cabecalho.php" ?>

<body class="usuario pg" style="font-family:'reem kufi', sans serif;">
    <div class="row">


        <div class="col s5 laranja center " id="login">

            <a href="Inicial.php" class="valign-wrapper white-text" style="font-size:2rem">
                <p class=" large material-icons white-text">arrow_back</p> Voltar
            </a>
            </p>
            <h1 class="white-text espaço" style="font-family: 'Reem Kufi', sans-serif">Login</h1>
            <h1 class="white-text" style="font-family: 'Reem Kufi', sans-serif; font-size:1.2rem;">Dados Pessoais</h1>
            <br>
            <div class="row">


                <div class="col s6  offset-s3">

                    <input id="email" type="text" placeholder="  Insira seu email">

                    <br><br>

                    <label for=""></label>
                    <input type="text" placeholder="  Insira sua senha"><br><br>
                    <a href="" class="white-text rem ">Esqueceu sua senha?</a><br><br>
                    <div class="row">
                        <a href="#" onclick="printar()" class="waves-effect waves-light btn-large white laranja-text rem btn">Entrar</a>
                    </div>
                </div>
            </div>



        </div>

        <div class="col s7 center " id="cadastro">
            <h1 class="laranja-text espaço" style="font-family: 'Reem Kufi', sans-serif">Registro</h1>
            <h1 class="laranja-text" style="font-family: 'Reem Kufi', sans-serif; font-size:1.2rem">Dados Cadastrais</h1>
            <div class="row">
                <div class="col s3"></div>
                <div class="col s6"><input class="in" type="text" placeholder="  Insira seu email">
                    <input class="in" type="text" placeholder="  Criar sua senha">
                    <input class="in" type="text" placeholder="  Confirme sua senha">
                    <input class="in" type="text" placeholder="  CPF ou CNPJ">
                    <input class="in" type="text" placeholder="  CEP"></div>
                <div class="row">
                    <div class="col s12">
                        <br>
                        <a href="#" onclick="printar()" class="laranja wshite-text rem btn-large btn">Cadastrar</a>
                    </div>
                </div>
            </div>




        </div>

    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="javascript/base.js"></script>

</html>