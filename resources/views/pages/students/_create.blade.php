
<div class="modal fade" id="createStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> AJOUT D'UN Elève</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <form class="modal-body" role="form" method="POST" action="{{ route('StudentPostCreate') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="matricule"> <strong>Matricule</strong><span matricule="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="matricule" type="text" class="form-control{{ $errors->has('matricule') ? ' has-error' : '' }}" required
                            name="matricule"
                            placeholder="Entrez le matricule"
                            value="{{ old('matricule') }}">
                    @if ($errors->has('matricule'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('matricule') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="firstname"> <strong>Prénom</strong><span firstname="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' has-error' : '' }}" required
                            name="firstname"
                            placeholder="Entrez le prénom"
                            value="{{ old('firstname') }}">
                    @if ($errors->has('firstname'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="lastname"> <strong>Nom</strong><span lastname="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' has-error' : '' }}" required
                            name="lastname"
                            placeholder="Entrez le nom"
                            value="{{ old('lastname') }}">
                    @if ($errors->has('lastname'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email"> <strong>Email</strong><span email="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" required
                            name="email"
                            placeholder="Entrez l'email"
                            value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contact"> <strong>Contact</strong></label>
                    <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' has-error' : '' }}" 
                            name="contact"
                            placeholder="Entrez la contact"
                            value="{{ old('contact') }}">
                    @if ($errors->has('contact'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('contact') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="birthdate"> <strong>Date de naissance</strong></label>
                    <input id="birthdate" type="text" class="form-control{{ $errors->has('birthdate') ? ' has-error' : '' }}" 
                            name="birthdate"
                            placeholder="Entrez la date de naissance"
                            value="{{ old('birthdate') }}">
                    @if ($errors->has('birthdate'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('birthdate') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="classes_id"> <strong>Classes_id</strong><span classes_id="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="classes_id" type="text" class="form-control{{ $errors->has('classes_id') ? ' has-error' : '' }}" required
                            name="classes_id"
                            placeholder="Entrez le classes_id"
                            value="{{ old('classes_id') }}">
                    @if ($errors->has('classes_id'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('classes_id') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="users_id"> <strong>Users_id</strong><span users_id="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="users_id" type="text" class="form-control{{ $errors->has('users_id') ? ' has-error' : '' }}" required
                            name="users_id"
                            placeholder="Entrez le users_id"
                            value="{{ old('users_id') }}">
                    @if ($errors->has('users_id'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('users_id') }}</strong></span>
                    @endif
                </div>
                
                <div class="modal-footer">
                    <button type="reset" class="btn btn-icon mx-1 waves-effect waves-light btn-warning">
                        <i class="fas fa-undo m-1"></i> Réinitialiser
                    </button>
                    <button type="submit" class="btn btn-icon mx-1 waves-effect waves-light btn-primary">
                        <i class="fas fa-save m-1"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>    
        