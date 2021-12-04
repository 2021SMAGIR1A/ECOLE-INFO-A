
<div class="modal fade modal-show" id="showMark{{ $mark->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> AFFICHAGE D'UNE Note</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="form_show">
                <div class="form-group">
                        <label for="mark_show"> <strong>Note</strong><span mark="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="mark_show" type="text" class="form-control" required
                                name="mark"
                                placeholder="Entrez la note"
                                value="{{ $mark->mark }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="observations_show"> <strong>Observations</strong></label>
                        <textarea id="observations_show" class="form-control"
                              name="observations"
                              rows="5"
                              placeholder="Entrez le observations" readonly="readonly">{{ $mark->observations }}</textarea>
                    </div>
                <div class="form-group">
                        <label for="tests_id_show"> <strong>Tests_id</strong><span tests_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="tests_id_show" type="text" class="form-control" required
                                name="tests_id"
                                placeholder="Entrez le tests_id"
                                value="{{ $mark->tests_id }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="students_id_show"> <strong>Students_id</strong><span students_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="students_id_show" type="text" class="form-control" required
                                name="students_id"
                                placeholder="Entrez le students_id"
                                value="{{ $mark->students_id }}" readonly="readonly">
                    </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-icon mx-1 waves-effect waves-light btn-primary" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times m-1"></i> Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>    
        