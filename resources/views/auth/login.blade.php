@extends('main')

@section('content')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Iniciar sesión
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">
                                {{ __('E-Mail Address') }}:
                            </label>
                            <input id="email" type="email" class="form-control @error('email') border-red @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <p class="text-red">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">
                                {{ __('Password') }}:
                            </label>
                            <input id="password" type="password" class="form-control @error('password') border-red @enderror" name="password" required>
                            @error('password')
                            <p class="text-red">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-danger" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <p class="">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
@endsection
