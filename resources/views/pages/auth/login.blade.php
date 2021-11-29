@extends('layouts.auth', [
    'title' => "Espace de connexion",
    'subtitle' => "Veuillez renseigner vos informations de connexion puis accédez à votre espace.",
])

@section('content')
    <form action="{{ route('voyager.login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="emailaddress">Email</label>
            <input class="form-control" type="email" name="email" id="emailaddress" placeholder="Entrez votre adresse mail" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <a href="{{ route('pwdrecover') }}" class="text-muted float-right"><small>Mot de passe oublié?</small></a>
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
        </div>
        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="remember" value="1">
                <label class="custom-control-label" for="checkbox-signin">Rester connecté</label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Connexion </button>
        </div>
    </form>
@endsection

@section('footer')
    <p class="text-muted">Vous n'avez pas de compte? <a href="{{ route('register') }}" class="text-muted ml-1"><b>S'inscrire</b></a></p>
@endsection