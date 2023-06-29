<?php
session_start();
if (isset($_SESSION["id"])) {
    header("location: pages/dashboard/dashboard.php");
} ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="styles.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper black">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a class="waves-effect waves-light btn black modal-trigger" href="#modalLogin">Acesso</a></li>

                <li><a class="waves-effect waves-light btn black modal-trigger" href="#modalRegister">Cadastro</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">

        <?php
        if (isset($_GET["msg"])) {
        ?>
        <div class="bloco">
            <h5>
                <?php echo $_GET["msg"] ?>
            </h5>
        </div>
        <?php
        }
        ?>


        <h3>Minha pagina</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend diam faucibus, convallis ipsum eu,
            elementum dui. Nulla pharetra mollis nisl, et fringilla ex maximus eget. Cras id mattis metus. Fusce
            dignissim mi ac leo luctus congue. Donec nec tristique massa, eu sagittis est. Cras et urna blandit elit
            rhoncus sollicitudin nec vel dui. Aenean ut fringilla nibh, blandit tincidunt neque. Sed eu quam vitae eros
            facilisis pretium at iaculis tellus. Mauris tristique in dui at hendrerit. Quisque porta et felis sed
            viverra. Maecenas ut quam mauris.

            Fusce a erat ac ex luctus aliquet et eget massa. Aenean vehicula sagittis libero, a porta massa ultrices
            commodo. Donec aliquam, arcu vitae maximus venenatis, sapien magna scelerisque sem, id pharetra libero nunc
            vestibulum dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            Morbi vehicula mauris vel nunc maximus, eget vehicula quam vestibulum. Mauris luctus semper lorem quis
            interdum. Nullam a malesuada augue.

            Aliquam venenatis, nulla vel consequat auctor, quam erat congue sapien, at mattis mauris sem sit amet est.
            Praesent pulvinar auctor lectus, nec sagittis est scelerisque eget. Maecenas et purus egestas, tincidunt
            risus volutpat, condimentum tortor. Nullam consequat ante eleifend ullamcorper porta. Proin fermentum dui eu
            consequat tempor. Vivamus eu fringilla risus. Pellentesque non consectetur ante. Pellentesque sit amet leo
            commodo, pellentesque arcu fermentum, luctus leo. Sed ultricies fringilla ligula eu tempus. Sed a dapibus
            nisl. Etiam tellus mi, dictum eget tincidunt nec, tempus quis velit. Sed efficitur ante vitae purus commodo
            bibendum. Praesent condimentum ex turpis, id consequat urna porttitor et. Integer pellentesque ullamcorper
            neque eget vehicula. Sed sed urna a sem ultrices dictum id mollis enim. Phasellus nibh ligula, feugiat at
            justo sit amet, porttitor semper mi.

            Vestibulum dui elit, finibus ac laoreet a, venenatis id dui. Sed auctor justo pharetra magna tincidunt
            feugiat. Ut cursus condimentum augue, pharetra consequat diam pulvinar a. Suspendisse eleifend posuere
            tortor, in viverra odio finibus quis. Pellentesque habitant morbi tristique senectus et netus et malesuada
            fames ac turpis egestas. Integer at viverra justo. Vivamus aliquam eget tellus vel mattis. Morbi varius sem
            turpis, nec volutpat enim porttitor at. Ut ut aliquam quam. Integer luctus, tellus et facilisis
            sollicitudin, odio risus efficitur nisi, vitae lobortis diam tellus eget ante. Cras sollicitudin luctus
            dapibus. Quisque quam lacus, facilisis eget semper at, venenatis condimentum ex.

            Maecenas non venenatis dui. Maecenas et nulla ex. Proin ornare, nibh at luctus dictum, lacus nisl
            pellentesque libero, sed feugiat odio orci in dolor. Suspendisse auctor velit sed massa lobortis dignissim.
            In vel tempor urna. Ut sit amet mauris at nibh luctus finibus vitae ac purus. Vestibulum mollis tristique
            sem ac volutpat. Donec facilisis eleifend metus ac semper. Donec interdum leo mollis, dignissim nunc ut,
            dapibus lacus. Pellentesque mattis ligula vel nunc egestas pretium vel ut diam.
        </p>

        <div id="modalLogin" class="modal modalLogin">
            <div class="row">
                <div class="col s2 offset-s10">
                    <a href="#!" class="modal-close btn-white black-text closeButton">Fechar</a>
                </div>
            </div>
            <div class="modal-content">
                <h4>Login</h4>
                <p>Modal de login</p>
                <div>
                    <form action="src/Login/Login.php" METHOD="POST">
                        <div class="row">
                            <div class="col s12">
                                <input type="email" name="email" placeholder="Insira seu e-mail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <input type="password" name="password" placeholder="Insira seu e-mail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <input type='submit' value="Acessar" class="btn white black-text">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="modalRegister" class="modal modalRegister">
            <div class="row">
                <div class="col s2 offset-s10">
                    <a href="#!" class="modal-close white black-text closeButton">Fechar</a>
                </div>
            </div>
            <div class="modal-content">
                <h4>Cadastro</h4>
                <p>Modal de registro</p>
                <div>
                    <form action="src/Register/Register.php" METHOD="POST">
                        <div class="row">
                            <div class="col s12">
                                <input type="email" id="emailRegister" name="emailRegister"
                                    placeholder="Insira seu e-mail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <input type="email" id="emailConfirmation" placeholder="Confirme seu e-mail" required>
                            </div>
                        </div>

                        <div class="form" id="dataRegister">
                            <div class="row">
                                <div class="col s12">
                                    <input type="password" id="password" name="passwordRegister"
                                        placeholder="Insira sua senha" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <input type="password" id="passwordConfirmation" placeholder="Confirme sua senha"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <input type='submit' id="submitButton" value="Cadastrar"
                                        class="btn white black-text">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        M.AutoInit();

        $('#dataRegister').hide();
        $('#submitButton').hide();

        $('#emailRegister, #emailConfirmation, #password, #passwordConfirmation').on('input', function() {

            var emailRegister = $('#emailRegister').val();
            var emailConfirmation = $('#emailConfirmation').val();
            var password = $('#password').val();
            var passwordConfirmation = $('#passwordConfirmation').val();

            if (emailRegister === emailConfirmation && emailRegister !== '' && emailConfirmation !== '') {
                $('#dataRegister').show();
            } else {
                $('#dataRegister').hide();
            }

            if (password === passwordConfirmation && password !== '' && passwordConfirmation !== '') {
                $('#submitButton').show();
            } else {
                $('#submitButton').hide();

            }
        });
        $(document).ready(function() {
            $('.bloco').css({
                'border-radius': '10px'
            });
            setTimeout(function() {
                $('.bloco').fadeOut();
            }, 3000);
        });
        </script>
</body>

</html>