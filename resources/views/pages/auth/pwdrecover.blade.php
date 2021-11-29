@extends('layouts.auth', [
    'title' => "Reinitialiser mot de passe",
    'subtitle' => "Entrez votre adresse mail et nous vous enverrons les instructions de reinitialisation dans votre boite mail.",
])

@section('content')
    <form action="#">
        <div class="form-group mb-3">
            <label for="emailaddress">Email</label>
            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Entrez votre adresse email">
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-lock-reset"></i> Reinitialiser mot de passe </button>
        </div>
        
    </form>
@endsection

@section('footer')
    <p class="text-muted">Retour à <a href="{{ route('voyager.login') }}" class="text-muted ml-1"><b>l'espace de connexion</b></a></p>
@endsection