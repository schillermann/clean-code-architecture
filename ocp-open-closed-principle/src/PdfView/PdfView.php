<?php
namespace App\PdfView;

use App\PrintPresenter\PrintView;
use Mpdf\Mpdf;

class PdfView implements PrintView
{
    public function render($balance)
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML('<h1>My Balance: ' . $balance . '</h1>');
        $mpdf->Output();
    }
}