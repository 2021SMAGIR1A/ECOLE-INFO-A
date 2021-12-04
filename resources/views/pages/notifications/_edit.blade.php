
<div class="modal fade modal-edit" id="editNotification{{ $notification->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> EDITION D'UN </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('NotificationPostEdit',$notification) }}" id="form_edit">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title_edit"> <strong>Titre</strong><span title="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="title_edit" type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" required
                                name="title"
                                placeholder="Entrez le titre"
                                value="{{ $notification->title ?? old('title') }}">
                        @if ($errors->has('title'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="description_edit"> <strong>Description</strong></label>
                        <textarea id="description_edit" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}"
                              name="description"
                              rows="5"
                              placeholder="Entrez la description">{{ $notification->description ?? old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="users_id_edit"> <strong>Users_id</strong><span users_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="users_id_edit" type="text" class="form-control{{ $errors->has('users_id') ? ' has-error' : '' }}" required
                                name="users_id"
                                placeholder="Entrez le users_id"
                                value="{{ $notification->users_id ?? old('users_id') }}">
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
        