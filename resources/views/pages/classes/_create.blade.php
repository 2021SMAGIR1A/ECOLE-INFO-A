
<div class="modal fade" id="createClasseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> AJOUT D'UNE Classe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <form class="modal-body" role="form" method="POST" action="{{ route('ClassePostCreate') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title"> <strong>Titre</strong><span title="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" required
                            name="title"
                            placeholder="Entrez le titre"
                            value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description"> <strong>Description</strong></label>
                    <textarea id="description" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}"
                            name="description"
                            rows="5"
                            placeholder="Entrez la description">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="fields_id"> <strong>Fields_id</strong><span fields_id="Requis" style="color: #DE3246">(*)</span></label>
                    <input id="fields_id" type="text" class="form-control{{ $errors->has('fields_id') ? ' has-error' : '' }}" required
                            name="fields_id"
                            placeholder="Entrez le fields_id"
                            value="{{ old('fields_id') }}">
                    @if ($errors->has('fields_id'))
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block"><strong>{{ $errors->first('fields_id') }}</strong></span>
                    @endif
                </div>
                
                <div class="modal-footer">
                    <button type="reset" class="btn btn-icon mx-1 waves-effect waves-light btn-warning">
                        <i class="fas fa-undo m-1"></i> R??initialiser
                    </button>
                    <button type="submit" class="btn btn-icon mx-1 waves-effect waves-light btn-primary">
                        <i class="fas fa-save m-1"></i> Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>    
        