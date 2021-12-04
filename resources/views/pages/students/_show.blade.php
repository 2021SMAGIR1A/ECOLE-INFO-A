
<div class="modal fade modal-show" id="showStudent{{ $student->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> AFFICHAGE D'UN Elève</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger" id="closeModal">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="form_show">
                <div class="form-group">
                        <label for="matricule_show"> <strong>Matricule</strong><span matricule="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="matricule_show" type="text" class="form-control" required
                                name="matricule"
                                placeholder="Entrez le matricule"
                                value="{{ $student->matricule }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="firstname_show"> <strong>Prénom</strong><span firstname="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="firstname_show" type="text" class="form-control" required
                                name="firstname"
                                placeholder="Entrez le prénom"
                                value="{{ $student->firstname }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="lastname_show"> <strong>Nom</strong><span lastname="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="lastname_show" type="text" class="form-control" required
                                name="lastname"
                                placeholder="Entrez le nom"
                                value="{{ $student->lastname }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="email_show"> <strong>Email</strong><span email="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="email_show" type="text" class="form-control" required
                                name="email"
                                placeholder="Entrez l'email"
                                value="{{ $student->email }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="contact_show"> <strong>Contact</strong></label>
                        <input id="contact_show" type="text" class="form-control" required
                                name="contact"
                                placeholder="Entrez la contact"
                                value="{{ $student->contact }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="birthdate_show"> <strong>Date de naissance</strong></label>
                        <input id="birthdate_show" type="text" class="form-control" required
                                name="birthdate"
                                placeholder="Entrez la date de naissance"
                                value="{{ $student->birthdate }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="classes_id_show"> <strong>Classes_id</strong><span classes_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="classes_id_show" type="text" class="form-control" required
                                name="classes_id"
                                placeholder="Entrez le classes_id"
                                value="{{ $student->classes_id }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="users_id_show"> <strong>Users_id</strong><span users_id="Requis" style="color: #DE3246">(*)</span></label>
                        <input id="users_id_show" type="text" class="form-control" required
                                name="users_id"
                                placeholder="Entrez le users_id"
                                value="{{ $student->users_id }}" readonly="readonly">
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
        