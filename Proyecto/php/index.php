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

    <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="Logo.png" />
    <link rel="stylesheet" href="../css/modsindex.css">



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

                    <input id="Buscador" size="50" type="search" placeholder="Buscar" aria-label="Search">

                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="linkcateg" class="nav-link" href="#categ">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a id="linkabout" class="nav-link" href="#about">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a id="aiuda" class="nav-link" style="cursor: pointer;">¿Necesitas Ayuda?
                        </a>
                    </li>


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

    <header>
        <br>

        <?php
        if (isset($_SESSION["UserAct"])) {

        ?>

            <h1 id="bienvenida" class="my-4" style="text-align: center;">¡Bienvenido de nuevo, <?php echo $Username_main; ?>!</h1>

        <?php

        }
        ?>


        <?php


        ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div id="carrusel" class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <!-- <div class="carousel-item active" style="background-image: url('https://res.cloudinary.com/jerrick/image/upload/fl_progressive,q_auto,w_1024/i5fhnwl9adcawdueihpu.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Promoción de Contratación</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div> -->
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('https://www.forbes.com/advisor/wp-content/uploads/2021/04/featured-image-types-of-paint.jpeg.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bienvenido</h3>
                        <p>Tenemos nuevos articulos disponibles</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <!-- <div class="carousel-item" style="background-image: url('https://mymodernmet.com/wp/wp-content/uploads/2018/04/best-oil-paints-thumbnail.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Promoción de Pinturas para artista</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container" style="margin-top: 50px;">


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
        <br id="categ">
        <br>

        <br>

        <div> </div>

        <h1 id="categorias" style="text-align: center; margin-bottom: 20px">CATEGORIAS</h1>

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card">
                    <a href="" data-toggle="modal" data-target="#mensajito" style="text-decoration: none; color: black;">
                        <img class="card-img-top border-bottom" src="../Images/Painter.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">Especialistas</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <a href="Pinturas.php" style="text-decoration: none; color: black;">
                        <img class="card-img-top" src="../Images/Pinturas.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">Pinturas</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <a href="materialespintar.php" style="text-decoration: none; color: black;">
                        <img class="card-img-top" src="../Images/Materiales.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">Materiales para Pintar</h4>
                        </div>
                    </a>

                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card">
                    <a href="artista.php" style="text-decoration: none; color: black;">
                        <img class="card-img-top border-bottom" src="../Images/artista.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">Artistas</h4>
                        </div>
                    </a>

                </div>
            </div>



            <div id="tpabout" class="col-md-6 mb-5">
                <div class="card">
                    <a href="arteurbano.php" style="text-decoration: none; color: black;">
                        <img class="card-img-top" src="../Images/Grafitero.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">Arte Urbano</h4>
                        </div>
                    </a>
                </div>
            </div>



        </div>

        <div class="modal fade" id="mensajito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br id="about">
        <div class="about" style="text-align: center; margin-bottom: 20px">


            <div class="jumbotron jumbotron-fluid" style="background-color: #8ECDFF;">
                <div class="container">
                    <h1 id="PEC" class="display-4">¿Quieres saber quienes somos?</h1>
                    <p id="PEC" class="lead">Somos un grupo donde se puede contratar especialistas en pintura. Si
                        necesita pintar
                        un tipo específico
                        de edificio o estructura,
                        naturalmente, acudirá con un especialista. Ademas, hemos crecido demasiado, que hemos
                        implementado la
                        parte de compra en la empresa (o mas bien en la pagína), a partir de estos momentos ya puedes
                        hacer compras de cualquier
                        tipo de
                        situacion en nuestro apartado de categorias, ¡a los mejores precios!, pasate al apartado de
                        categorias y
                        veras productos interesantes, para todo tipo de gustos.</p>
                </div>
            </div>


        </div>

        <section>
            <div class="info-adicional">
                <div class="info-slide">
                    <div class="img-container">
                        <img src="../Images/Tarjetas.png" width="180px" alt="">
                    </div>
                    <h3 id="PEC" style="text-align: center; margin-top: 20px;">Pago con Tarjeta</h3>
                    <h6 style="text-align: center;">Aceptamos todas las tarjetas, tanto VISA y MasterCard, todas son bienvenidas.</h6>
                </div>
                <div id="middle-pic" class=" info-slide">
                    <div class="img-container">
                        <img src="../Images/Mexico.png" width="220px" alt="">
                    </div>
                    <h3 id="PEC" style="text-align: center; margin-top: 20px;">Envios a todo México</h3>
                    <h6 style="text-align: center;">Los envios son totalmente gratuitos a cualquier parte del país, sin restriccion alguna.</h6>
                </div>
                <div class="info-slide">
                    <div class="img-container">
                        <img src="../Images/shield.png" width="180px" alt="">
                    </div>
                    <h3 id="PEC" style="text-align: center; margin-top: 20px;">Compra Protegida</h3>
                    <h6 style="text-align: center;">¿Tu compra viene dañada o defectuosa?, No te preocupes, con nuestro sello de compra protegida podremos ayudarte con un nuevo artículo o devolución del mismo.</h6>
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
        $(document).ready(function() {
            console.log("hola");

            $.ajax({
                type: "GET",
                url: "../QuerysPhp/nuevosofertas.php",
                async: true,
                dataType: 'json',
                success: function(result) {
                    // var html;
                    var i = 0;
                    result.forEach(Ultimos => {
                        console.log("hola");
                        html = `
                        <div class="carousel-item" style="background-image: url('${Ultimos.Imagen}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>${Ultimos.Product_Name}</h3>
                        <p>${Ultimos.Descripcion}</p>
                    </div>
                    </div>
                        `;


                        $('#carrusel').append(html);




                    })

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }


            });


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


            $("#aiuda").click(function() {
                introJs().setOptions({
                    steps: [{
                        intro: "¡Hola!, bienvenido seas a Industrial Painting, ¡la mejor tienda para realizar cualquier trabajo relacionado a la pintura!"
                    }, {
                        element: document.querySelector('#linkcateg'),
                        intro: "Presiona aquí para llevarte a las categorías que manejamos en la página."
                    }, {
                        element: document.querySelector('#linkabout'),
                        intro: "Presiona aquí para llevarte a la seccion donde puedes saber un poco más de nosotros."
                    }, {
                        element: document.querySelector('#carouselExampleIndicators'),
                        intro: "Aquí veras novedades o los artículos que esten en promoción."
                    }, {
                        element: document.querySelector('#categorias'),
                        intro: "Aquí veras las categorías, dependiendo de tu estilo y de lo que busques lo veras aquí."
                    }, {
                        element: document.querySelector('.about'),
                        intro: "Aquí conoceras un poco quienes somos :)."
                    }, {
                        element: document.querySelector('.info-adicional'),
                        intro: "Aquí veras información adicional, como métodos de pago y más!."
                    }, {
                        element: document.querySelector('#aiuda'),
                        intro: "En caso de que olvides algo, puedes volver a este botón, sin problema te lo volvemos a explicar, gracias por visitarnos :D"
                    }, {
                        intro: '<img src="https://support.schoology.com/hc/user_images/Lojbjo7Tth4Eo_Iywy8Bgg.gif" onerror="this.onerror=null;this.src=\'https://i.giphy.com/ujUdrdpX7Ok5W.gif\';" alt="">'
                    }]

                }).start();
            });

        });
    </script>


</body>

</html>