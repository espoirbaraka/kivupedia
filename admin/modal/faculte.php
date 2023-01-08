<!-- Add -->
<div class="modal fade" id="addfaculte">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Nouveau</b></h4>


            </div>
            <div class="modal-body">
                <form action="manager/create.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="event" value="CREATE_FACULTE" required>
                        <label for="faculte" class="col-sm-3 control-label">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="faculte" name="faculte" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>


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
                    <input type="hidden" class="faculte" name="id">
                    <input type="hidden" name="event" value="UPDATE_FACULTE">
                    <div class="form-group">
                        <label for="edit_faculte" class="col-sm-3 control-label">Designation</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_faculte" name="faculte" required>
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

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Suppression...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/delete.php">
                    <input type="hidden" class="faculte" name="id">
                    <input type="hidden" name="event" value="DELETE_FACULTE">
                    <div class="text-center">
                        <p>SUPPRIMER LA FACULTE</p>
                        <h2 style="font-weight: bold;" class="bold fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>




