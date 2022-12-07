<?php
include '../../class/app.php';
require_once '../dompdf/autoload.inc.php';
ob_start();

$sql = "SELECT * FROM tbl_paiement
        INNER JOIN tbl_commande
        ON tbl_paiement.CodeCommande=tbl_commande.CodeCommande
        INNER JOIN tbl_client
        ON tbl_commande.CodeClient=tbl_client.CodeClient";
$req = $app->fetchPrepared($sql);

require_once 'content.php';



 $html=ob_get_contents();
 ob_clean();
use Dompdf\Dompdf;
use Dompdf\Options;
 $options =  new Options();
 $options->set('defaultFont', 'Courier');
$pdf= new Dompdf($options);
$pdf->setPaper("A4", "portrait");
$pdf->loadHtml($html);
$pdf->render();
$nom="liste des ventes";
$pdf->stream($nom, array('Attachment'=>0,false));

?>