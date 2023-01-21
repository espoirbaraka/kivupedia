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
                    <input type="hidden" class="cours" name="id">
                    <input type="hidden" name="event" value="UPDATE_COURS">
                    <div class="form-group">
                        <label for="edit_cours" class="col-sm-3 control-label">Cours</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_cours" name="cours" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_institution" class="col-sm-3 control-label">Institution</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_institution" name="institution" required>
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
                    <input type="hidden" class="cours" name="id">
                    <input type="hidden" name="event" value="ACTIVATE_COURS">
                    <div class="text-center">
                        <p>ACTIVER LE COURS</p>
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
                    <input type="hidden" class="cours" name="id">
                    <input type="hidden" name="event" value="DESACTIVATE_COURS">
                    <div class="text-center">
                        <p>DESACTIVER LE COURS</p>
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


<!-- Update file -->
<div class="modal fade" id="file">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Modifier le fichier...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php" enctype="multipart/form-data">
                    <input type="hidden" class="cours" name="id">
                    <input type="hidden" name="event" value="UPDATE_FILE_COURS">
                    <div class="text-center">
                        <p>COURS : <i class="fullname"></i></p>
                        <input type="file" name="fichier" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat" name="delete"><i class="fa fa-trash"></i> Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>