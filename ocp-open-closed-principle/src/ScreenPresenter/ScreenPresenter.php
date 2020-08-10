<?php
namespace App\ScreenPresenter;

use App\Controller\FinancialReportPresenter;

class ScreenPresenter implements FinancialReportPresenter
{
    protected $model;
    protected $view;

    public function __construct(ScreenViewModel $model, ScreenView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function renderBalance()
    {
        $balance = $this->model->getBalance();

        $this->view->render('template.phtml', $balance);
    }
}