@extends('layouts.login')

<link rel="shortcut icon" href="{{ asset('NiceAdmin/assets/img/logo.png') }}" type="image/x-icon"/>
@section('titulo', $titulo)

@section('contenido')
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{ route('inicio') }}" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('NiceAdmin/assets/img/logo.png') }}" alt="">
                  <span class="d-none d-lg-block">Ventas y Almacén</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Inicio de Sesión</h5>
                    <p class="text-center small">Ingresa tu correo y contraseña para acceder</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('logear') }}" novalidate autocomplete="off">
                    @csrf
                    <div class="col-12">
                      <!--<label for="email" class="form-label">Correo</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Por favor ingrese su correo.</div>
                      </div>-->
                      <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <div class="form-floating">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                          <label for="email">Correo</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <!--<label for="password" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Por favor ingrese su contraseña!</div>-->
                      <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                        <div class="form-floating">
                          <input type="password" class="form-control" name="password" id="password" placeholder="Username" required>
                          <label for="password">Username</label>
                        </div>
                      </div>


                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Inicio Sesión</button>
                    </div>
                  </form>
                  <!-- Validación que viene de logear -->
                  <div>
                    @if ($errors->any())
                        <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </p>
                    @endif
                  </div>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Diseñado por &#169;RixlerCorp
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
</main><!-- End #main -->
@endsection