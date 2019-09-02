<?php


namespace DesignPatterns\DIContainer;

include_once("Product.php");
include_once("ShoppingOrder.php");
use DesignPatterns\Product\Product;
use DesignPatterns\ShoppingOrder\ShoppingOrder;

/**
 * Class DIContainer >> Inject all dependencies into single class called container
 * @package DesignPatterns\DIContainer
 */
class DIContainer
{
    public $params = array();

    public function __construct(array $params) {
        $this->params = $params;
    }

    public function createProduct() {
        return new Product(
            $this->params["name"],
            $this->params["price"],
            $this->params["quantity"]
        );
    }

    public function createOrder($product) {
        $order = new ShoppingOrder($this->params["name"]);
        return $order->setProduct($product);
    }
}