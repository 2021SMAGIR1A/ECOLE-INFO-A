
<div class="modal fade modal-edit" id="editMark{{ $mark->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> EDITION D'UNE Note</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('MarkPostEdit',$mark) }}" id="form_edit">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="mark_edit"> <strong>Note</strong><span mark="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="mark_edit" type="text" class="form-control{{ $errors->has('mark') ? ' has-error' : '' }}" required
                                name="mark"
                                placeholder="Entrez la note"
                                value="{{ $mark->mark ?? old('mark') }}">
                        @if ($errors->has('mark'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('mark') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="observations_edit"> <strong>Observations</strong></label>
                        <textarea id="observations_edit" class="form-control{{ $errors->has('observations') ? ' has-error' : '' }}"
                              name="observations"
                              rows="5"
                              placeholder="Entrez le observations">{{ $mark->observations ?? old('observations') }}</textarea>
                        @if ($errors->has('observations'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('observations') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="tests_id_edit"> <strong>Tests_id</strong><span tests_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="tests_id_edit" type="text" class="form-control{{ $errors->has('tests_id') ? ' has-error' : '' }}" required
                                name="tests_id"
                                placeholder="Entrez le tests_id"
                                value="{{ $mark->tests_id ?? old('tests_id') }}">
                        @if ($errors->has('tests_id'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('tests_id') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="students_id_edit"> <strong>Students_id</strong><span students_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="students_id_edit" type="text" class="form-control{{ $errors->has('students_id') ? ' has-error' : '' }}" required
                                name="students_id"
                                placeholder="Entrez le students_id"
                                value="{{ $mark->students_id ?? old('students_id') }}">
                        @if ($errors->has('students_id'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('students_id') }}</strong></span>
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
        