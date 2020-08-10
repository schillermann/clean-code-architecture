<?php
/**
 * See: https://stackoverflow.com/questions/4530023/does-php-supports-mvp-pattern
 */
require __DIR__ . '/../vendor/autoload.php';

use App\Controller\FinancialReportController;
use App\ScreenPresenter\ScreenPresenter;
use App\WebView\WebView;
use App\ScreenPresenter\ScreenViewModel;
use App\PdfView\PdfView;
use App\PrintPresenter\PrintViewModel;
use App\PrintPresenter\PrintPresenter;

$controller = new FinancialReportController();

if($_GET['format'] == 'pdf') {
    $viewModel = new PrintViewModel();
    $view = new PdfView();
    $presenter = new PrintPresenter($viewModel, $view);
    $controller->pdfAction($presenter);
} else {
    $viewModel = new ScreenViewModel();
    $view = new WebView();
    $presenter = new ScreenPresenter($viewModel, $view);
    $controller->webAction($presenter);
}

