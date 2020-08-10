<?php
namespace App\PrintPresenter;

use App\Controller\FinancialReportPresenter;

class PrintPresenter implements FinancialReportPresenter
{
    protected $model;
    protected $view;

    public function __construct(PrintViewModel $model, PrintView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function renderBalance()
    {
        $balance = $this->model->getBalance();

        $this->view->render($balance);
    }
}