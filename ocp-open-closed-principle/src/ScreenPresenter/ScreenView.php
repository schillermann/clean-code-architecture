<?php
namespace App\ScreenPresenter;

interface ScreenView
{
    public function render(string $path, float $balance);
}