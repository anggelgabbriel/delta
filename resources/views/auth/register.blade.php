@extends('layouts.main')

@section('title', 'Login')

@section('content')

    <div class="center-screen d-flex flex-column justify-content-center align-items-center">
        <div class="auth-logo">
            <a href="/">
                <img src="images/logo.svg" alt="" style="">
            </a>
        </div>
s
        <div class="form-in">
            <p class="text-center">Preencha os campos abaixo</p>
            @if ($errors->any())
                <div class="p-1 mb-2 bg-danger text-white rounded-top rounded-bottom">
                    <ul class="mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ __($error) }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <x-jet-label for="name" value="Nome"/>
                    <x-jet-input class="form-control mt-1" type="text" name="name" :value="old('name')"
                                 required autofocus autocomplete="name"/>
                </div>

                <div class="form-group mt-2">
                    <x-jet-label for="email" value="Email"/>
                    <x-jet-input class="form-control mt-1" type="email" name="email" :value="old('email')" required/>
                </div>

                <div class="form-group mt-2">
                    <x-jet-label for="password" value="Senha"/>
                    <x-jet-input class="form-control mt-1" type="password" name="password" required
                                 autocomplete="new-password"/>
                </div>

                <div class="form-group mt-2">
                    <x-jet-label for="password_confirmation" value="Confirmar senha"/>
                    <x-jet-input class="form-control mt-1" type="password"
                                 name="password_confirmation" required autocomplete="new-password"/>
                </div>
                <button type="submit" class="mt-2 btn d-btn d-btn-full d-btn-primary mt-4">Registrar</button>
            </form>
            <div class="d-flex mt-2">
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('login') }}">
                    Já é registrado?
                </a>
            </div>
        </div>
    </div>
@endsection
