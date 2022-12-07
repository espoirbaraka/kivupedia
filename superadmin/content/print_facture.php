<?php
$vente = $_GET['vente'];
$sql = "SELECT * FROM tbl_paiement
        inner join tbl_commande
        ON tbl_paiement.CodeCommande=tbl_commande.CodeCommande
        INNER JOIN tbl_client
        ON tbl_commande.CodeClient=tbl_client.CodeClient
        WHERE tbl_paiement.CodePaiement=$vente";
$req = $app->fetch($sql);
?>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box" style="overflow: auto;">

                <div class="box-body">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Facture de paiement
                                    <small class="pull-right">Date: <?php echo $app->dateconv(date('Y-m-d')) ?></small>
                                </h2>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                De
                                <address>
                                    <strong>Pharmacie Pharmavie</strong><br>
                                    Q. Katindo, Av. XXX N 23<br>
                                    Commune de karisimbi<br>
                                    Telephone: +243 977 553 723<br>
                                    Email: info@pharmavie.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                A
                                <address>
                                    <strong><?php echo $req['PrenomClient'].' '.$req['NomClient'] ?></strong><br>
                                    Adresse: <?php echo $req['Adresse'] ?><br>
                                    Email: <?php echo $req['Email'] ?>
                                </address>
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Quantite</th>
                                        <th>Prix unitaire</th>
                                        <th>Sous-total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM tbl_detail_commande
                                            INNER JOIN tbl_commande
                                            ON tbl_detail_commande.CodeCommande=tbl_commande.CodeCommande
                                            INNER JOIN tbl_medicament
                                            ON tbl_detail_commande.CodeMedicament=tbl_medicament.CodeMedicament
                                            INNER JOIN tbl_paiement
                                            ON tbl_commande.CodeCommande=tbl_paiement.CodeCommande
                                            WHERE tbl_paiement.CodePaiement=$vente";
                                    $req1 = $app->fetchPrepared($sql);
                                    foreach ($req1 as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['Designation'] ?></td>
                                            <td><?php echo $item['Quantite'] ?></td>
                                            <td><?php echo $item['pv'] ?> fc</td>
                                            <td><?php echo $item['Quantite']*$item['pv']; ?> fc</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-xs-6">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Montant a payer:</th>
                                            <td><?php echo $req['Montant'] ?> fc</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                    </section>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->




            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
</div>
</body>
</html>


