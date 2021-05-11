<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina completa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.min.js" integrity="sha512-+uGHdpCaEymD6EqvUR4H/PBuwqm3JTZmRh3gT0Lq52VGDAlywdXPBEiLiZUg6D1ViLonuNSUFdbL2tH9djAP8g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.all.min.js" integrity="sha512-TxryOYMwWBRIlZoSkKW+jZvJ834vF3u8mE0jDeTLEDdPplOVNNZfWm9VFtEuW365BFPLK5CEIF/vaHqmAey8XA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.all.js" integrity="sha512-Xf17iw0EVVbG2XuoUtwWxZnJWuPyGPb4CXvETp7u9KN7mzvRb9S+q8Mui4qtSxtHQ07hc2MXjN14BjyKqLKp5Q==" crossorigin="anonymous"></script>
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook">
            <div>hola mundos</div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Distribuciones Linux</h1>

        </div>
    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <form id="formulario" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" class="form-control" id="name"name="name" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellidos</label>
                        <input type="text" class="form-control" id="last" name="last" placeholder="Apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Numero telefonico</label>
                    <input type="texto" class="form-control" id="num" name="num" placeholder="Numero">
                </div>
                </div>
                <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
            </form>
            
          
        </section>
        <section   class="about">
            <div id="tabla"  class="contenedor">
            
            </div>
            </div>

        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ=="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="JAVASCRIPT/main.js" async defer></script>
    <script src="JAVASCRIPT/filtro.js" async defer></script>
</body>

</html>
<script type = "text/javascript">
$(document).ready(function(){
    $('#enviar').click(function(){
        var datos=$('#formulario').serialize();
        $.ajax({
            type:"POST",
            url:"conexion.php",
            data:datos,
            success:function(r){
                if(r==1){
                    bien( 'OK','Registro exitoso','success');
                    //así le indicarías que después de tener un procesamiento exitoso limpie los inputs
                    $('#name').val('');
                    $('#last').val('');
                    $('#num').val('');
                }else{
                    mal("¡Error!", "El servidor fallo", "error");

                }
            }
        });

        return false;
    });
});

    $(document).ready(function () {
        setInterval(
            function () {
                $('#tabla').load('tabla.php');

            },5000

        );

    });


    function mal(titulo, descripcion, tipoAlerta) {
    Swal.fire(
        titulo,
        descripcion,
        tipoAlerta



    );}
    function bien(titulo, descripcion, tipoAlerta) {
    Swal.fire(
        titulo,
        descripcion,
        tipoAlerta



    );}


</script>
