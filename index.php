<?php

require_once("dompdf/dompdf_config.inc.php");

$html = file_get_contents('pdf_test.html');
$filename = 'meu_pdf.pdf';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('a4', 'portrait');
$dompdf->render();
$dompdf->stream($filename, array("Attachment" => 0));