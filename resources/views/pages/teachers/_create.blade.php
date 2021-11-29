
<div class="modal fade" id="createTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-file"></i> AJOUT D'UN </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <form class="modal-body" role="form" method="POST" action="{{ route('Module-TaskManagerTeacherPostCreate') }}">
                {{ csrf_field() }}
                <div class="form-group">
                        <label for="matricule"> <strong></strong><span matricule="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="matricule" type="text" class="form-control{{ $errors->has('matricule') ? ' has-error' : '' }}" required
                                name="matricule"
                                placeholder="Entrez le "
                                value="{{ old('matricule') }}">
                        @if ($errors->has('matricule'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('matricule') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="nom"> <strong></strong><span nom="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' has-error' : '' }}" required
                                name="nom"
                                placeholder="Entrez le "
                                value="{{ old('nom') }}">
                        @if ($errors->has('nom'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('nom') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="prenoms"> <strong></strong><span prenoms="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="prenoms" type="text" class="form-control{{ $errors->has('prenoms') ? ' has-error' : '' }}" required
                                name="prenoms"
                                placeholder="Entrez le "
                                value="{{ old('prenoms') }}">
                        @if ($errors->has('prenoms'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('prenoms') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="users_id"> <strong>Utilisateur</strong><span users_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="users_id" type="text" class="form-control{{ $errors->has('users_id') ? ' has-error' : '' }}" required
                                name="users_id"
                                placeholder="Entrez le utilisateur"
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
        