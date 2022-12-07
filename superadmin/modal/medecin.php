<!-- Add -->
<div class="modal fade" id="addmedecin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Nouveau medecin</b></h4>


            </div>
            <div class="modal-body">
                <form action="manager/create.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="event" value="CREATE_MEDECIN" required>
                        <label for="nom" class="col-sm-3 control-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="postnom" class="col-sm-3 control-label">Post-nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="postnom" name="postnom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="prenom" class="col-sm-3 control-label">Prenom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telephone" class="col-sm-3 control-label">Telephone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="telephone" name="telephone" required>
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
                <h4 class="modal-title"><b>Editer le medecin</b></h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php">
                    <input type="hidden" class="medecin" name="id">
                    <input type="hidden" name="event" value="UPDATE_MEDECIN">
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
                        <label for="edit_phone" class="col-sm-3 control-label">Telephone</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_phone" name="telephone">
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
                    <input type="hidden" class="medecin" name="id">
                    <input type="hidden" name="event" value="DELETE_MEDECIN">
                    <div class="text-center">
                        <p>SUPPRIMER LE MEDECIN</p>
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


<!-- Creer compte -->
<div class="modal fade" id="account">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Creer un compte à <span class="fullname"></span></b></h4>


            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/create.php">
                    <input type="hidden" class="medecin" name="id">
                    <input type="hidden" name="event" value="CREATE_ACCOUNT">
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Mot de passe</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categorie" class="col-sm-3 control-label">Categorie</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="categorie">
                                <?php
                                $sql = "SELECT * FROM tbl_categorie_user";
                                $req = $app->fetchPrepared($sql);
                                foreach($req as $row){
                                    ?>
                                    <option value="<?php echo $row['CodeCategorie'] ?>"><?php echo $row['Categorie'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
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