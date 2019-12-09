<!DOCTYPE html>
<html lang="es">
<head>
    <title>LogIn</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body class="cover" style="background-image: url(./assets/img/loginFont.jpg);">
<p>
    Correo: admin@admin.com
</p>
<p>
    Clave: 12345678
</p>
<form method="POST" action="{{ route('login')}}" autocomplete="off" class="full-box logInForm">
    <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
    <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
    <div class="form-group label-floating">
        <label class="control-label" for="UserEmail">E-mail</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <p class="help-block">Escribe tú E-mail</p>
    </div>
    <div class="form-group label-floating">
        <label class="control-label" for="UserPass">Contraseña</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
        @enderror
        <p class="help-block">Escribe tú contraseña</p>
    </div>
    <div class="form-group text-center">
        <input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
    </div>
</form>
<!--====== Scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<script src="{{asset('js/ripples.min.js')}}"></script>
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    $.material.init();
</script>
</body>
</html>