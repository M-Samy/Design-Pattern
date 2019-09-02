<?php


namespace DesignPatterns\Product;


class Product
{
    public $productName;
    public $productPrice;
    public $productQuantity;

    public function __construct($productName, $productPrice, $productQuantity)
    {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productQuantity = $productQuantity;
    }

    public function getPriceWithTax(){}
}