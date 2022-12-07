<?php
include '../../class/app.php';
require_once '../dompdf/autoload.inc.php';
ob_start();

$sql = "SELECT * FROM tbl_medicament
        INNER JOIN tbl_categorie
        ON tbl_medicament.CodeCategorie=tbl_categorie.CodeCategorie";
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
$nom="liste des medicaments";
$pdf->stream($nom, array('Attachment'=>0,false));

?>