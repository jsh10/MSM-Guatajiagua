@extends('layouts.navbar')

@section('content')
<div class="container-form">
    <form action="#" method="POST" class="contact-form">
        <h2>Contáctenos</h2>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" placeholder="Ingrese su mensaje" required></textarea>
        </div>
        <button type="submit">Enviar</button>


    </form>
   

</div>

@include('layouts.footer')

@endsection


