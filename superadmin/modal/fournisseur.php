<!-- Add -->
<div class="modal fade" id="addfournisseur">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Nouveau fournisseur</b></h4>


            </div>
            <div class="modal-body">
                <form action="manager/create.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="event" value="CREATE_FOURNISSEUR" required>
                        <label for="nom" class="col-sm-3 control-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="postnom" class="col-sm-3 control-label">Post-nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="postnom" name="postnom">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="prenom" class="col-sm-3 control-label">Prenom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="prenom" name="prenom">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="adresse" class="col-sm-3 control-label">Adresse</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="adresse" rows="3"></textarea>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Enregistrer</button>
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
                <h4 class="modal-title"><b>Editer le fournisseur</b></h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php">
                    <input type="hidden" class="fournisseur" name="id">
                    <input type="hidden" name="event" value="UPDATE_FOURNISSEUR">
                    <div class="form-group">
                        <label for="edit_nom" class="col-sm-3 control-label">Nom</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_nom" name="nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_postnom" class="col-sm-3 control-label">Post-nom</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_postnom" name="postnom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_prenom" class="col-sm-3 control-label">Prenom</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_prenom" name="prenom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_adresse" class="col-sm-3 control-label">Adresse</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_adresse" name="adresse">
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
                    <input type="hidden" class="fournisseur" name="id">
                    <input type="hidden" name="event" value="DELETE_FOURNISSEUR">
                    <div class="text-center">
                        <p>SUPPRIMER LE FOURNISSEUR</p>
                        <h2 class="bold fullname"></h2>
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

