<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Events Lounge</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/style.css">
 </head>
<body class="main-layout">
@include ('header')
     <section class="slider_section">
            <div class="container-fluid padding_dd">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Bienvenido {{Auth::user()->name}}</span>
                      <h1>Salón de Eventos</h1>
                      <p>Conoce nuestro catálogo para conocer los paquetes y reserva la fecha para tus eventos importantes. </p>
                      <a href="/packs">Ver paquetes</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="https://images.squarespace-cdn.com/content/v1/5ddef2a79ab6b86728e38ce7/1596129911435-1DIICXW083BWHKS1H5M3/virtual+%289%29.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
</section>
              <div class="copyright">
                  <p>Programación Web con Frameworks</p>
                </div>
    
      </body>

</html>