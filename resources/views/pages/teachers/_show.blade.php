
<div class="modal fade modal-show" id="showTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="matricule_show"> <strong></strong><span matricule="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="matricule_show" type="text" class="form-control" required
                                name="matricule"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="nom_show"> <strong></strong><span nom="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="nom_show" type="text" class="form-control" required
                                name="nom"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="prenoms_show"> <strong></strong><span prenoms="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="prenoms_show" type="text" class="form-control" required
                                name="prenoms"
                                placeholder="Entrez le "
                                value="" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="users_id_show"> <strong>Utilisateur</strong><span users_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="users_id_show" type="text" class="form-control" required
                                name="users_id"
                                placeholder="Entrez le utilisateur"
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
        