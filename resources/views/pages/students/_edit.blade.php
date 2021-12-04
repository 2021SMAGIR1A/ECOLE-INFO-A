
<div class="modal fade modal-edit" id="editStudent{{ $student->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> EDITION D'UN Elève</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('StudentPostEdit',$student) }}" id="form_edit">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="matricule_edit"> <strong>Matricule</strong><span matricule="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="matricule_edit" type="text" class="form-control{{ $errors->has('matricule') ? ' has-error' : '' }}" required
                                name="matricule"
                                placeholder="Entrez le matricule"
                                value="{{ $student->matricule ?? old('matricule') }}">
                        @if ($errors->has('matricule'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('matricule') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="firstname_edit"> <strong>Prénom</strong><span firstname="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="firstname_edit" type="text" class="form-control{{ $errors->has('firstname') ? ' has-error' : '' }}" required
                                name="firstname"
                                placeholder="Entrez le prénom"
                                value="{{ $student->firstname ?? old('firstname') }}">
                        @if ($errors->has('firstname'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="lastname_edit"> <strong>Nom</strong><span lastname="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="lastname_edit" type="text" class="form-control{{ $errors->has('lastname') ? ' has-error' : '' }}" required
                                name="lastname"
                                placeholder="Entrez le nom"
                                value="{{ $student->lastname ?? old('lastname') }}">
                        @if ($errors->has('lastname'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="email_edit"> <strong>Email</strong><span email="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="email_edit" type="text" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" required
                                name="email"
                                placeholder="Entrez l'email"
                                value="{{ $student->email ?? old('email') }}">
                        @if ($errors->has('email'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="contact_edit"> <strong>Contact</strong></label>
                        <input id="contact_edit" type="text" class="form-control{{ $errors->has('contact') ? ' has-error' : '' }}" 
                                name="contact"
                                placeholder="Entrez la contact"
                                value="{{ $student->contact ?? old('contact') }}">
                        @if ($errors->has('contact'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('contact') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="birthdate_edit"> <strong>Date de naissance</strong></label>
                        <input id="birthdate_edit" type="text" class="form-control{{ $errors->has('birthdate') ? ' has-error' : '' }}" 
                                name="birthdate"
                                placeholder="Entrez la date de naissance"
                                value="{{ $student->birthdate ?? old('birthdate') }}">
                        @if ($errors->has('birthdate'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('birthdate') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="classes_id_edit"> <strong>Classes_id</strong><span classes_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="classes_id_edit" type="text" class="form-control{{ $errors->has('classes_id') ? ' has-error' : '' }}" required
                                name="classes_id"
                                placeholder="Entrez le classes_id"
                                value="{{ $student->classes_id ?? old('classes_id') }}">
                        @if ($errors->has('classes_id'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('classes_id') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="users_id_edit"> <strong>Users_id</strong><span users_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="users_id_edit" type="text" class="form-control{{ $errors->has('users_id') ? ' has-error' : '' }}" required
                                name="users_id"
                                placeholder="Entrez le users_id"
                                value="{{ $student->users_id ?? old('users_id') }}">
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
</div>    
        