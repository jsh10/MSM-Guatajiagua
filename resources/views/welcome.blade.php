   
@extends('layouts.navbar')


@section('content')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
  

     


  <title>Menú de Navegación</title>
  
<body>


   <p></p>

    <header>
        <h1>Bienvenido a nuestro sitio web</h1>
      </header>
    
      <p></p>
      <section class="welcome-section">
        <div class="welcome-image">
          <img src="img/logo_guate.jpg" alt="Imagen de bienvenida">
        </div>
        <div class="welcome-description">
          <h3>Guatajiagua es un municipio ubicado en el departamento de Morazán en El Salvador. Morazán es uno de los 14 departamentos de El Salvador y se encuentra en la parte noreste del país. Guatajiagua es conocido por su hermoso entorno natural, que incluye montañas, bosques y ríos.</h3>
          
        </div>
      </section>

     <p>

      <section class="advertisement">
       <h2>Spot Publicitario</h2>
        <p>Anuncio sobre la alcaldía</p>
        <button type="submit"><a href="#">Más información</a></button>
       </section>


     <p>

     <div class="container-card">
        <div class="card">
          <img src="{{asset('img\GT1.png')}}" alt="Imagen 1">
          <div class="card-content">
          <h3>cultura</h3>
            <p>Las fiestas patronales de Guatajiagua se celebran del 18 al 20 de enero en honor a San Sebastián Mártir. </p>
          </div>
        </div>
        
        <div class="card">
          <img src="{{asset('img\GT2.jpg')}}" alt="Imagen 2">
          <div class="card-content">
            <h3>Industria alfarera </h3>
            <p>En el departamento de Morazán, en El Salvador, se encuentran diversas industrias alfareras que han sido parte importante de la cultura y la economía de la región. Estas industrias se dedican a la producción de cerámica y productos de barro utilizando técnicas artesanales y tradicionales transmitidas de generación en generación.</p>
          </div>
        </div>
        
        <div class="card">
          <img src="{{asset('img\GT3.png')}}" alt="Imagen 3">
          <div class="card-content">
            <h3>Turismo</h3>
            <p>La "Poza al Salto" es una atracción natural ubicada en el municipio de Guatajiagua, en el departamento de Morazán, El Salvador. Se trata de una cascada que forma parte del Río Torola y que ha ganado popularidad en los últimos años como un destino turístico para aquellos que disfrutan de la naturaleza y el ecoturismo.</p>
          </div>
        </div>
      </div>

      <p>

     
   
</body>
</html>
@include('layouts.footer')
@endsection