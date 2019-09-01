<?php
namespace DesignPatterns\AbstractFactory;


interface AbstractBookFactory
{
    public function makePHPBook();
    public function makePythonBook();
}