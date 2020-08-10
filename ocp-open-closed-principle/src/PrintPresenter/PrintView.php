<?php
namespace App\PrintPresenter;

interface PrintView
{
    public function render(float $balance);
}