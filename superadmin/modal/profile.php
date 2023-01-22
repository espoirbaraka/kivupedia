<!-- Edit profile -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Profil de l'utilisateur</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="operation/profile_update.php?return=<?php echo '../'.basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Nom complet</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomcomplet" name="nom" value="<?php echo $req['NomComplet']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-3 control-label">Adresse mail</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $req['Email']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Mot de passe</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $req['Password']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo:</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="curr_password" class="col-sm-3 control-label">Mot de passe actuel:</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password_actuel" name="password_actuel" placeholder="entrer le mot de passe actuel pour enregistrer les modifications" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                <!-- <input type="reset"  name="Reset" id="button" value="Reset" /> -->
                <button type="submit" class="btn btn-primary btn-flat" name="save"><i class="fa fa-edit"></i> Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>
