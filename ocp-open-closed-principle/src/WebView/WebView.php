<?php
namespace App\WebView;

use App\ScreenPresenter\ScreenView;

class WebView implements ScreenView
{
    public function render(string $path, $balance)
    {
        ob_start();
        require($path);
        echo ob_get_clean();
    }
}