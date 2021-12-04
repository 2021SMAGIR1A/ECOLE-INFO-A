
<div class="modal fade modal-edit" id="editTest{{ $test->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> EDITION D'UNE Evaluation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('TestPostEdit',$test) }}" id="form_edit">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title_edit"> <strong>Titre</strong><span title="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="title_edit" type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" required
                                name="title"
                                placeholder="Entrez le titre"
                                value="{{ $test->title ?? old('title') }}">
                        @if ($errors->has('title'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="coef_edit"> <strong>Coefficient</strong><span coef="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="coef_edit" type="text" class="form-control{{ $errors->has('coef') ? ' has-error' : '' }}" required
                                name="coef"
                                placeholder="Entrez le coefficient"
                                value="{{ $test->coef ?? old('coef') }}">
                        @if ($errors->has('coef'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('coef') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="datetest_edit"> <strong>Date</strong></label>
                        <input id="datetest_edit" type="text" class="form-control{{ $errors->has('datetest') ? ' has-error' : '' }}" 
                                name="datetest"
                                placeholder="Entrez le date"
                                value="{{ $test->datetest ?? old('datetest') }}">
                        @if ($errors->has('datetest'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('datetest') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="courses_id_edit"> <strong>Courses_id</strong><span courses_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="courses_id_edit" type="text" class="form-control{{ $errors->has('courses_id') ? ' has-error' : '' }}" required
                                name="courses_id"
                                placeholder="Entrez le courses_id"
                                value="{{ $test->courses_id ?? old('courses_id') }}">
                        @if ($errors->has('courses_id'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('courses_id') }}</strong></span>
                        @endif
                    </div>
                <div class="form-group">
                        <label for="classes_id_edit"> <strong>Classes_id</strong><span classes_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="classes_id_edit" type="text" class="form-control{{ $errors->has('classes_id') ? ' has-error' : '' }}" required
                                name="classes_id"
                                placeholder="Entrez le classes_id"
                                value="{{ $test->classes_id ?? old('classes_id') }}">
                        @if ($errors->has('classes_id'))
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <span class="help-block"><strong>{{ $errors->first('classes_id') }}</strong></span>
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
        