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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="Logo.png" />
    <link rel="stylesheet" href="../css/modsseleccionado.css">



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
    <!-- Navigation -->
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
    <div class="container" style="margin-top: 50px;">

        <div class="row">

            <div id="Selected" class="col-lg-9">


                <!--aqui va este rollo 
                
                    <div id="Productito" class="card mt-4">
                    <img src="https://res.cloudinary.com/rsc/image/upload/b_rgb:FFFFFF,c_pad,dpr_1.0,f_auto,q_auto,w_700/c_pad,w_700/Y2009216-01.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Brocha Individual</h3>
                        <h4>$100 MXN</h4>
                        <br>
                        <p class="card-text">Brocha indispensable para poder pintar en cualquier superficie.</p>



                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> 4.0 stars
                        <br>
                        <br>




                    </div>


                </div>

                ->


                <!-- /.card -->

            </div>

            <div class="col-lg-3">

                <div class="card mt-4">
                    <div class="card-body" style="text-align: center;">

                        <h5 class="card-text">Fecha de entrega estimada a más tardar en 5 días habíles<h5>

                                <h5 class="card-text">Puedes retirar también en sucursales de correo u otros puntos.<h5>

                                        <h5 class="card-text">Stock disponible.<h5>

                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Cantidad:</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <a href="#" class="btn btn-success" style="padding-left:30px; padding-right:30px;">Comprar Ahora</a>
                                                <br>
                                                <br>
                                                <a href="#" class="btn btn-primary" style="padding-left:20px; padding-right:20px;">Agregar al
                                                    Carrito</a>
                                                <br>
                                                <br>
                                                <h5 class="card-text">Medios de Pago<h5>

                                                        <h6 class="card-text">Tarjetas de Credito y Debito<h6>
                                                                <img src="../Images/Tarjetas.png" alt="" width="80px">

                                                                <h6 class="card-text">PayPal<h6>
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" alt="" width="80px">
                                                                        <h6 class="card-text">Pago en Efectivo</h6>
                                                                        <img src="http://sistema.inmosuite.mx/images/pago-en-efectivo.png" alt="" width="95px">


                    </div>
                </div>

            </div>

            <!-- /.col-lg-3 -->



        </div>

        <br>

        <!-- <div class=" card-deck">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider
                        card with supporting text below as a
                        natural lead-in to
                        additional content. This content is
                        a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3
                        mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has
                        supporting text below as a natural
                        lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3
                        mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider
                        card with supporting text below as a
                        natural lead-in to
                        additional content. This card has
                        even longer content than the first
                        to show that equal height
                        action.</p>
                </div>

                <div class="card-footer">
                    <small class="text-muted">Last updated 3
                        mins ago</small>
                </div>
            </div>
        </div> -->
    </div>


    <!-- /.container -->

    <!-- Footer -->

    <input id="Prod" type="hidden" value="<?php echo $_GET["Producto"] ?>">
    <input id="Cat" type="hidden" value="<?php echo $_GET["Categoria"] ?>">

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

            // var categoryData = {
            //     Producto:"Brocha",
            //     Categoria: "Artista"
            // };

            var producto = $("#Prod").val();
            var categoria = $("#Cat").val();

            var html;


            // var Bro = "Brocha"
            // if(Bro == "Brocha"){
            //     alert(Bro);
            // }
            // console.log(Bro);

            $.ajax({
                type: "POST",
                url: "../QuerysPhp/ProductoSeleccionado.php",
                async: true,
                dataType: 'json',
                data: {
                    producto: producto,
                    categoria: categoria
                },
                success: function(response) {

                    response.forEach(productito => {

                        html = `
                            <div id="Productito" class="card mt-4">
                             <img src="${productito.Imagen}" class="card-img-top">
                            <div class="card-body">
                            <h3 class="card-title">${productito.Product_Name}</h3>
                            <h4>$${productito.Precio}MXN</h4>
                            <br>
                            <p class="card-text">${productito.Descripcion}</p>

                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> 4.0 stars
                            <br>
                            <br>

                            </div>
                            </div>
                            `;

                    })

                    console.log(response);
                    // var info = JSON.parse(response);

                    // if(response != "error"){

                    //     console.log(info);  
                    // }


                    $('#Selected').append(html);


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


        });
    </script>

</body>

</html>