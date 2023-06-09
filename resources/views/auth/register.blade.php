@extends('Frontend.app')

@section('content')
    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Crear cuenta</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Nombre</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="Nombre completo"
                                        required="">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Correo</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required="" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row row">
                                
                                <div class="col-md-6">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password-confirm">Confirmar contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-group-label" for="remember" style="float: right;">Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-solid w-auto">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--Section ends-->
@endsection
