<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Paquetes</title>
</head>
<body>
@include ('header')
</br>
    <center><h1>PAQUETES</h1></center>
    <section id="why-us" class="why-us">
        <div class="row">
          @foreach ($packs as $pack)
            <div class="col-lg-4">
              <div class="box">
                <span>{{ $pack->name }}</span>
                <h4>Informacion</h4>
                <p>$ {{ $pack->price }}</p>
                @if(Auth::check())
                  <a class="testbutton" href="/booking/{{$pack->id}}">Reservar</a>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
</body>
</html>