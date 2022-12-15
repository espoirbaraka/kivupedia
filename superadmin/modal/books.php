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
                    <input type="hidden" class="livre" name="id">
                    <input type="hidden" name="event" value="UPDATE_LIVRE">
                    <div class="form-group">
                        <label for="edit_email" class="col-sm-3 control-label">Titre</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_titre" name="titre" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_email" class="col-sm-3 control-label">Sous-titre</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_sous_titre" name="sous_titre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_password" class="col-sm-3 control-label">Discription</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_description" name="description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_password" class="col-sm-3 control-label">Auteur principal</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_auteur" name="auteur">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_password" class="col-sm-3 control-label">Editeur</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_editeur" name="editeur">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_password" class="col-sm-3 control-label">Lieu d'édition</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_edition" name="edition">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_password" class="col-sm-3 control-label">ISBN</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_isbn" name="isbn">
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
                    <input type="hidden" class="user" name="id">
                    <input type="hidden" name="event" value="DELETE_ADMIN">
                    <div class="text-center">
                        <p>SUPPRIMER</p>
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




