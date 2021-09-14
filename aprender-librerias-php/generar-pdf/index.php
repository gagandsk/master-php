<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//$html = "<h1>Generando pdf desde PHP</h1>";

//RECOJER LA VISTA A IMPRIMIR

ob_start();
require_once 'mi_pdf.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('mi_pdf.pdf');
