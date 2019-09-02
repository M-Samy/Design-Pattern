<?php


namespace DesignPatterns\ShoppingOrder;

include_once("Product.php");
use DesignPatterns\Product\Product;

class ShoppingOrder
{
    public $orderNumber;
    public $product;

    public function __construct($orderNumber) {
        $this->orderNumber = $orderNumber;
    }

    // Implement a DI using setter "In case, if we mustn't need for the Product into init Order object"
    public function setProduct(Product $product) {
        $this->product = $product;
        return $product;
    }

    public function calculatePayment(){}
}