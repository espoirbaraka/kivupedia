<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Modifier</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php">
                    <input type="hidden" class="offre" name="id">
                    <input type="hidden" name="event" value="UPDATE_OFFRE">
                    <div class="form-group">
                        <label for="edit_cours" class="col-sm-3 control-label">Entreprise</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_entreprise" name="entreprise" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_institution" class="col-sm-3 control-label">Nombre des postes</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_nombre" name="nombre" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_institution" class="col-sm-3 control-label">Poste</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_poste" name="poste" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- activate -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Activation...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php">
                    <input type="hidden" class="offre" name="id">
                    <input type="hidden" name="event" value="ACTIVATE_OFFRE">
                    <div class="text-center">
                        <p>ACTIVER L'OFFRE</p>
                        <h2 style="font-weight: bold;" class="bold fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat" name="delete"><i class="fa fa-trash"></i> Activer</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Desactivate -->
<div class="modal fade" id="desactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Desactivation...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php">
                    <input type="hidden" class="offre" name="id">
                    <input type="hidden" name="event" value="DESACTIVATE_OFFRE">
                    <div class="text-center">
                        <p>DESACTIVER L'OFFRE</p>
                        <h2 style="font-weight: bold;" class="bold fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Desactiver</button>
                </form>
            </div>
        </div>
    </div>
</div>
