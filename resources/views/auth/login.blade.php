{{-- 
<div class="container" style="margin:auto; background: silver;width: 50%;">
    <div class="row" style="margin:auto">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading" style="margin:auto;">Login</div>

                <div class="panel-body" style="margin:auto;width: 100%;">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin:auto;;width: 100%;">
                            <label for="email" class="col-md-4 control-label"  style="text-align:right;">E-Mail Address</label>

                            <div class="col-md-6" style="margin:auto;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"  style="margin:auto;">
                            <label for="password" class="col-md-4 control-label" style="text-align:right;">Password</label>

                            <div class="col-md-6"  style="margin:auto;">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






 --}}

























<!doctype html>
<html lang="es">
  <head>
    
    <title>El Blanco Es Cristo - Administraci&oacute;n</title>


    <!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="{!! asset('css/signin.css') !!}" >
    <!-- Bootstrap core CSS -->
<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url({{asset('css/img/foto1.png')}}); 
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

        html,
  body {
    height: 100%;
  }

  body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }

  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }

  .form-signin .checkbox {
    font-weight: 400;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }



    </style>

    
    <!-- Custom styles for this template -->
    
  </head>
  <body class="text-center">

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
</svg>

    
<main class="form-signin">
  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    <h1 class="h3 mb-3 fw-normal" style="color:#fff;">El Blanco Es Cristo</h1>
    {{ csrf_field() }}
    <div class="form-floating">
       
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}"  required="TRUE" name="email" >
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">                         

      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required="TRUE" name="password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
  </form>

        @if ($errors->has('email'))
            <span class="help-block" style="color:#fff">
            La Contraseña O El Correo No Son Correctos.
            </span>
        @endif
      {{-- <a href="/register">Registrarse</a> --}}
      <p class="mt-5 mb-3 text-muted" style="color:#fff">&copy;2021</p>

</main>


    
  </body>
</html>
