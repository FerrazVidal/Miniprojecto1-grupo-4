<?php 

	use Dompdf\Dompdf;

	require __DIR__ . "/dompdf/autoload.inc.php";

	$dompdf = new Dompdf();



	ob_start();
	require __DIR__ . "/PDF/pdf.php";
	$dompdf->loadHtml(ob_get_clean());

	$dompdf->setPaper("A3");

	$dompdf->render();
	$dompdf->stream("file.pdf", ["Attachment" => false]);
