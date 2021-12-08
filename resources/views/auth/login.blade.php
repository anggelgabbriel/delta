@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div>
        <div class="center-screen d-flex flex-column justify-content-center align-items-center">

            @if ($errors->any())
                <p>Essas credenciais não batem com nossos registros</p>
            @endif

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-in">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p class="text-center">Preencha os campos para fazer o login</p>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email"
                               placeholder="Digite o seu email"
                               name="email" :value="old('email')" required autofocus>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Senha</label>
                        <input class="form-control" type="password"
                               placeholder="Digite a sua senha"
                               name="password" required autocomplete="current-password"/>
                    </div>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="form-check-input" name="remember">
                        <label class="form-check-label" for="remember">Lembrar</label>
                    </div>
                    <button type="submit" class="mt-2 btn d-btn d-btn-full d-btn-primary">Entrar</button>
                </form>
                <div class="flex items-center mt-2">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

