<?php
namespace App\Controller;

class FinancialReportController
{
    public function webAction(FinancialReportPresenter $presenter)
    {
        $presenter->renderBalance();
    }

    public function pdfAction(FinancialReportPresenter $presenter)
    {
        $presenter->renderBalance();
    }
}