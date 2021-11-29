@extends('layouts.auth', [
    'title' => "Inscription gratuite",
    'subtitle' => "Vous n'avez pas de compte? Créez votre compte, ça ne prendra pas plus d'une minute.",
])

@section('styles')
<style>
    .auth-fluid .auth-fluid-form-box {
        max-width: 680px;
    }
</style>
@endsection

@section('content')
    <form action="#">
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="firstname">Votre nom</label>
                    <input class="form-control" type="text" id="firstname" placeholder="Entrez votre nom" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="lastname">Vos prénoms</label>
                    <input class="form-control" type="text" id="lastname" placeholder="Entrez vos prénoms" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fields_id">Filière</label>
                    <select class="custom-select text-secondary" id="fields_id">
                        <option disabled selected>Selectionnez votre filière</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="classes_id">Classe</label>
                    <select class="custom-select text-secondary" id="classes_id">
                        <option disabled selected>Selectionnez votre classe</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> 
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-7">
                <div class="form-group">
                    <label for="emailaddress">Email</label>
                    <input class="form-control" type="email" id="emailaddress" required placeholder="Entrez votre adresse mail">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="form-control" type="password" id="password" placeholder="Entrez votre mot de passe" name="password" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                <label class="custom-control-label" for="checkbox-signup">J'ai lu et j'accepte <a href="javascript: void(0);" class="text-muted">les Termes et Conditions générales d'utilisation</a></label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-account-circle"></i> S'inscrire </button>
        </div>
    </form>
@endsection

@section('footer')
    <p class="text-muted">Vous avez déjà un compte? <a href="{{ route('voyager.login') }}" class="text-muted ml-1"><b>Connectez-vous</b></a></p>
@endsection