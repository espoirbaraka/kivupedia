<!-- Add -->
<div class="modal fade" id="addarticle">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Nouveau medicament</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form action="manager/create.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="event" value="CREATE_MEDICAMENT" required>
                        <label for="nom" class="col-sm-3 control-label">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom" name="designation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pv" class="col-sm-3 control-label">Prix de vente(fc)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="pv" name="pv" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categorie" class="col-sm-3 control-label">Categorie</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="categorie">
                                <?php
                                $sql = "SELECT * FROM tbl_categorie";
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

                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="image" required>
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
                <h4 class="modal-title"><b>Editer le medicament</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/update.php">
                    <input type="hidden" class="medicament" name="id">
                    <input type="hidden" name="event" value="UPDATE_MEDICAMENT">
                    <div class="form-group">
                        <label for="edit_designation" class="col-sm-3 control-label">Designation</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_designation" name="designation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_prix" class="col-sm-3 control-label">Prix(fc)</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_prix" name="prix">
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


