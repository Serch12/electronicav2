@extends('Frontend.app')

@section('content')
<section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Recuperación de contraseña</h3>
                    <div class="theme-card">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="theme-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-solid">{{ __('Enviar enlace para cambiar password') }}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <img src="{{asset('assets/svg/login/login2.svg')}}" alt="" style="width: -webkit-fill-available;">
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
