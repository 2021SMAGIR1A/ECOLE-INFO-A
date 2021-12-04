
<div class="modal fade modal-show" id="showCourse{{ $course->uuid }}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main-primary">
                <h4 class="modal-title text-uppercase" id="exampleModalLabel"><i class="fas fa-file"></i> AFFICHAGE D'UN Cours</h4>
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
                                value="{{ $course->title }}" readonly="readonly">
                    </div>
                <div class="form-group">
                        <label for="description_show"> <strong>Description</strong></label>
                        <textarea id="description_show" class="form-control"
                              name="description"
                              rows="5"
                              placeholder="Entrez la description" readonly="readonly">{{ $course->description }}</textarea>
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
        