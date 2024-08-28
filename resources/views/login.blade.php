@extends('master')

@section('header-intro')
<div class="text-center mb-3">
    <h2 class="display-6 font-weight-bold">Login</h2>
    <p class="text-muted">Faça o login para acessar sua conta</p>
</div>
@endsection

@section('main')
<div class="container d-flex justify-content-center align-items-center min-vh-80">
    <div class="card p-4 shadow-lg" style="max-width: 500px; width: 100%;">
        @if (session()->has('error_login'))
        <div class="alert alert-danger mb-4">
            {{ session()->get('error_login') }}
        </div>
        @endif

        @if (auth()->guest())
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" placeholder="Digite seu email" value="kuhn.nichole@example.com"
                    class="form-control @error('email') is-invalid @enderror" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" placeholder="Digite sua senha"
                    class="form-control @error('password') is-invalid @enderror" required value="123">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Logar
            </button>
        </form>
        @else
        <h2 class="text-center">Você já está logado</h2>
        @endif
    </div>
</div>
@endsection
