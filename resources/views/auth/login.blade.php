@extends('Frontend.app')

@section('content')
<section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="review">Contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="review" name="password" placeholder="Ingresa tu contraseña" required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-group-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-group-label" for="remember">
                                            Recordar credenciales
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    @if (Route::has('password.request'))
                                        <label class="form-group-label" for="remember" style="float: right;"> Olvidaste tu contraseña? <a href="{{ route('password.request') }}">Recuperar</a></label>
                                    @endif   
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-solid">Iniciar sesión</button>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-solid right">Regístrate</a>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <img src="assets/svg/login/login2.svg" alt="" style="width: -webkit-fill-available;">
                    <!-- <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a href="#"
                            class="btn btn-solid">Create an Account</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
