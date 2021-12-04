<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
    <meta name="description" content="">
    <title>Industrial Painting</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/intro.js/minified/intro.min.js"></script>



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="Logo.png" />
    <link rel="stylesheet" href="../css/modspinturas.css">



</head>

<body>

    <?php
    session_start();

    $Username_main;
    if (isset($_SESSION["UserAct"])) {
        $Usuario =  $_SESSION["UserAct"];
        foreach ($Usuario as $renglon) {
            foreach ($renglon as $columna => $valor) {

                if ($columna == "Username" && $valor != null) {
                    echo $valor;

                    $Username_main = $valor;
                }
            }
        }
    }

    ?>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top shadow p-2 mb-4" style="background-color: #8ECDFF;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../Images/Logo.png" alt="" width="60px">
                Industrial Painting
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <form class="d-flex " style="margin-right: 5px;">

                    <input id="Buscador" size="50" type="search" placeholder="Buscar" aria-label="Search" style="">

                </form>
                <ul class="navbar-nav ml-auto">




                    <!-- <a id="btniniciosesion" class="btn btn-primary" href="Login.html">Iniciar Sesión</a> -->
                    <!-- Button trigger modal -->

                    <?php

                    if (isset($_SESSION["UserAct"])) {



                    ?>
                        <img src="https://www.pngarts.com/files/10/Default-Profile-Picture-Transparent-Images.png" width="40px" alt="">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                echo $Username_main;
                                ?>


                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Carrito</a>
                                <a class="dropdown-item" href="..\QuerysPhp\CerrarSesion.php">Salir</a>

                            </div>
                        </li>
                    <?php

                    } else {


                    ?>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Iniciar Sesion
                        </button>


                    <?php



                    }

                    ?>
                    <!-- Modal -->


                </ul>
            </div>
        </div>
    </nav>


    <div>

        <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="login">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuario</label>
                                    <input type="email" class="form-control" id="UsuarReg" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="PassReg">
                                </div>

                            </div>

                            <div class="Registerlogin">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuario</label>
                                    <input type="email" class="form-control" id="NewUsuario" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="NewContra">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo</label>
                                    <input type="email" class="form-control" id="NewEmail" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <p id=QuieroRegistrar style="margin-right:auto ">¿No tienes cuenta? Registrate aquí</p>
                                <p id=QuieroIniciar style="margin-right:auto ">¿Ya tienes cuenta? Inicia Sesión aquí</p>
                                <button id="AccionLogin" type="button" class="btn btn-primary">Entrar</button>
                                <button onClick="Registrar()" id="AccionRegistrar" type="button" class="btn btn-primary">Registrarme</button>


                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <header class="py-4" style="background-color: #4F5BD6;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Arte Urbano</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Queremos que te sientas bienvenido y en casa.</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div id="cartita" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">








                </div>
            </div>
        </section>

    </div>


    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-primary">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Industrial Painting 2021</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript
    < src="vendor/jquery/jquery.min.js"></>
    < src="vendor/bootstrap/js/bootstrap.bundle.min.js"></> -->

    <script>

    </script>

    <script>
        $(document).ready(function() {

            var categoryData = {
                Categoria: "ArteUrbano"
            };
            $.ajax({
                type: "GET",
                url: "../QuerysPhp/ObtenerProductos.php",
                data: categoryData,
                dataType: 'json',
                success: function(result) {
                    // var html;
                    var i = 0;
                    result.forEach(categoria => {

                        html = `
                        <div class="col mb-5">
                                             <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="${categoria.Imagen}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 id="NombreProd" class="fw-bolder">${categoria.Product_Name}</h5>
                                    <!-- Product price-->
                                    <span id="PrecioProd" class="text-muted text-decoration-line-through"></span>
                                    $${categoria.Precio}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div  class="text-center"><a href="seleccionado.php?Producto=${categoria.Product_Name}&Categoria=${"ArteUrbano"}" type="button" class="btn btn-outline-dark mt-auto">Mirar</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        `;


                        $('#cartita').append(html);

                        // i++;



                    })

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }


            });


            // var Categoria = "Artista";


            // window.location.href = "../QuerysPhp/ObtenerProductos.php?Categoria=" + Categoria;



            $(".Registerlogin").hide();
            $("#AccionRegistrar").hide();
            $("#QuieroIniciar").hide();

            $("#QuieroRegistrar").click(function() {

                $(".login").hide();
                $(".Registerlogin").fadeIn();
                $("#AccionLogin").hide();
                $("#AccionRegistrar").fadeIn();
                $("#QuieroRegistrar").hide();
                $("#QuieroIniciar").fadeIn();


            });



            $("#QuieroIniciar").click(function() {
                $(".login").fadeIn();
                $(".Registerlogin").hide();
                $("#AccionLogin").fadeIn();
                $("#AccionRegistrar").hide();
                $("#QuieroRegistrar").fadeIn();
                $("#QuieroIniciar").hide();

            });

            $("#AccionLogin").click(function() {

                var Usuario = $("#UsuarReg").val();
                var Contra = $("#PassReg").val();

                window.location.href = "../QuerysPhp/SesionIniciada.php?Usuario=" + Usuario + "&Contra=" + Contra;

            });

            $("#AccionRegistrar").click(function() {
                var Usuario = $("#NewUsuario").val();
                var Email = $("#NewEmail").val();
                var Contra = $("#NewContra").val();

                window.location.href = "Registrar.php?Usuario=" + Usuario + "&Email=" + Email + "&Contra=" + Contra;
            });

            $("#SelProd").click(function() {

                var Prod = $("#NombreProd").text();
                var Categ = "ArteUrbano";
                console.log(Prod);
                console.log(Categ);


                window.location.href = "../QuerysPhp/ProductoSeleccionado.php?Producto=" + Prod + "&Categoria" + Categ;

            });

            // $("#aiuda").click(function() {

            //     introJs().setOptions({
            //         steps: [{
            //             intro: "¡Hola!, veo que eres un artista, ¡eso es increible!, te enseñare como navegar por aquí."
            //         }, {
            //             element: document.querySelector('#ArtistPlace'),
            //             intro: "Esto es solo un simple recordatorio de donde te has metido."
            //         }, {
            //             intro: "En está página veras todos los artículos disponibles."
            //         }, {
            //             element: document.querySelector('#examplecard'),
            //             intro: "Aquí veras una imagen del articulo, nombre y precio."
            //         }, {
            //             element: document.querySelector('#verarticulo'),
            //             intro: "Puedes ver más detalles del producto o tambien puedes comprarlo ingresando desde aquí."
            //         }, {
            //             element: document.querySelector('#aiuda'),
            //             intro: "En caso de que olvides algo, puedes volver a este botón, sin problema te lo volvemos a explicar."
            //         }]

            //     }).start();
            // });
        });
    </script>

</body>

</html>