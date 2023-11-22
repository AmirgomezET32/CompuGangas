<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    
    <title>CompuGangas</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: white;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


    <header style="background: url(fondo.jpg); background-repeat: no-repeat; background-size: cover;">
        <nav>
            <a href="https://www.mercadolibre.com.ar/" class="nav-link1" style="color: white;"> « Regresar </a>
        </nav>
        <div class="logo">
            <img src="images/logo2.png" alt="" class="logo-img"> <!--logo mercado libre-->
        </div>
        <div>
            <a href="https://www.mercadolibre.com.ar/ayuda"> <img class="fotosoporte" src="images/soporte.png" alt="" style="color: white;"> <!--foto  y link soporte -->
            </a>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              Mas Información
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2"> <!--Dezliar menu-->
              <li><a class="dropdown-item active" href="https://ads.mercadolibre.com.ar/">Anuncios</a></li>
              <li><a class="dropdown-item" href="https://www.mercadolibre.com.ar/ayuda/Seguridad_663">Centro de seguridad</a></li>
              <li><a class="dropdown-item" href="#">Acerca de nosotros</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Programadores</a></li>
            </ul>
          </div>
    </header>
    



    <div class="form-register">
        <p class="bienvenida">¡Bienvenido a la Base de Datos de CompuGangas!</p>
        
        <div class="botones">
            
            <a href="ingresar.php" ><input type="submit" value="Ingresar productos" class="button"></a> <!--Botones ingresar y buscar productos-->
            <a href="retirar.php"><input  type="submit" value="Buscar productos" class="button1"></a>
        </div>
        
    </div>
    


    <footer>
        
        <div class="foot">
            <a href="https://careers-meli.mercadolibre.com/?utm_campaign=site-mla&utm_source=mercadolibre&utm_medium=mercadolibre" 
                class="nav-link3">Trabajá con nosotros</a>
            <a href="https://www.mercadolibre.com.ar/ayuda/terminos-y-condiciones-de-uso_991" class="nav-link4">Términos
                y condiciones</a>


        </div>
        <div class="foot2">
            <label for="">Copyright © 1999-2023 Compumania S.R.L</label>

        </div>
        <div class="foot3">
            <label for="">Teodoro García 3899 , PB, CP 1427, Chacarita, CABA</label>

        </div>
    
    </footer>
</body>

</html>