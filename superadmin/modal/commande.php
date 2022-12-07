<!-- Ajouter un medicament -->
<div class="modal fade" id="medicament">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Ajouter un medicament</b></h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/create.php">
                    <input type="hidden" class="commande" name="id">
                    <input type="hidden" class="client" name="client">
                    <input type="hidden" name="event" value="ADD_MEDICAMENT">

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Medicament</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="medicament">
                                <?php
                                $sql = "SELECT * FROM tbl_medicament WHERE Stock > 0";
                                $req = $app->fetchPrepared($sql);
                                foreach($req as $row){
                                    ?>
                                    <option value="<?php echo $row['CodeMedicament'] ?>"><?php echo $row['Designation'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Quantite</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="" name="qte" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Vendre-->
<div class="modal fade" id="vendre">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Vendre</b></h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="manager/create.php">
                    <input type="hidden" class="commande" name="id">
                    <input type="hidden" class="prix" name="prix">
                    <input type="hidden" name="event" value="VENDRE_COMMANDE">
                    <div class="text-center">
                        <p>EFFECTUER LA VENTE DE</p>
                        <h2 class="bold pv"></h2>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <button type="submit" class="btn btn-primary btn-flat" name="edit"><i class="fa fa-money"></i> Vendre</button>
                </form>
            </div>
        </div>
    </div>
</div>