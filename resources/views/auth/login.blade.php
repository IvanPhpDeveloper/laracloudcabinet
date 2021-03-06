@extends('layouts.app')

@section('content')
<div class="container " style="margin-top:50px">
    <div class="row justify-content-center" >
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center ">{{ __('Логин') }}</div>

                <div class="card-body justify-content-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"
                            >{{ __('Ваш E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                style="">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"
    >{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-default" style=".btn{
 width: 100%;
 background: #200122;
 padding: 10px 20px;
 border: none;
 font-size: 14px;
 font-weight: bold;
 color: #fff;
 border-radius: 20px;
 text-transform: uppercase;
 margin: 20px 0 30px 0;
}
.btn:focus{
 background: #eec111;
 color: #fff;
 outline: none;
 box-shadow: none;
}">
                                    {{ __('Login') }}
                                </button>

                                <a href='{{ route('register') }}' class="btn btn-default"style=".btn{
 width: 100%;
 background: #200122;
 padding: 10px 20px;
 border: none;
 font-size: 14px;
 font-weight: bold;
 color: #fff;
 border-radius: 20px;
 text-transform: uppercase;
 margin: 20px 0 30px 0;
}
.btn:focus{
 background: #eec111;
 color: #fff;
 outline: none;
 box-shadow: none;
}">
                                    Register
                                </a>



                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                        </div>







                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
