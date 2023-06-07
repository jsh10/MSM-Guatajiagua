<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>Enlaces</h3>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="">Contacto</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Contacto</h3>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> Guatajiagua, Morazan, El Salvador</li>
            <li><i class="fas fa-phone"></i> +26343320</li>
            <li><i class="fas fa-envelope"></i> guata_gob@edu.sv.com</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Síguenos</h3>
          <div class="social-icons">
            <a href=""><img src="{{asset('img\Insta.png')}}" alt="Imagen 1"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><img src="{{asset('img\FaceBook.png')}}" alt="Imagen 1"><i class="fab fa-twitter"></i></a>
            <a href="#"><img src="{{asset('img\Twitter.png')}}" alt="Imagen 1"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="content">
    @yield('content')
  </div>
</body>
</html>
