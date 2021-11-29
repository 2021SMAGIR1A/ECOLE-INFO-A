
<div class="modal fade modal-show" id="showTestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-file"></i> AFFICHAGE D'UN </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="form_show">
                <div class="form-group">
                        <label for="title_show"> <strong>Titre</strong><span title="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="title_show" type="text" class="form-control" required
                                name="title"
                                placeholder="Entrez le titre"
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="coef_show"> <strong></strong><span coef="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="coef_show" type="text" class="form-control" required
                                name="coef"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="datetest_show"> <strong></strong></label>
                        <input id="datetest_show" type="text" class="form-control" required
                                name="datetest"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="courses_id_show"> <strong></strong><span courses_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="courses_id_show" type="text" class="form-control" required
                                name="courses_id"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="classes_id_show"> <strong></strong><span classes_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="classes_id_show" type="text" class="form-control" required
                                name="classes_id"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
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
        