
<div class="modal fade modal-edit" id="editComplaint{{ $complaint->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> EDITION D'UNE Reclamation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('ComplaintPostEdit',$complaint) }}" id="form_edit">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title_edit"> <strong>Titre</strong><span title="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="title_edit" type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" required
                                name="title"
                                placeholder="Entrez le titre"
                                value="{{ $complaint->title ?? old('title') }}">
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
                              placeholder="Entrez la description">{{ $complaint->description ?? old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="marks_id_edit"> <strong>Marks_id</strong><span marks_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="marks_id_edit" type="text" class="form-control{{ $errors->has('marks_id') ? ' has-error' : '' }}" required
                                name="marks_id"
                                placeholder="Entrez le marks_id"
                                value="{{ $complaint->marks_id ?? old('marks_id') }}">
                        @if ($errors->has('marks_id'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('marks_id') }}</strong></span>
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
</div>    
        