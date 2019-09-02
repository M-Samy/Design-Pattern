<?php

include_once("Product.php");
include_once("ShoppingOrder.php");
include_once("DIContainer.php");

use DesignPatterns\DIContainer\DIContainer;
use DesignPatterns\Product\Product;
use DesignPatterns\ShoppingOrder\ShoppingOrder;

$product = new Product("Labtop", 10000, 5);
$order = new ShoppingOrder(1);
$order->setProduct($product);
var_dump($order);


//Test Dependency Container

//$container = new DIContainer(array("name" => "Apple", "price" => 20, "quantity" => 10));
//$containerProduct = $container->createProduct();
//$containerOrder = $container->createOrder($containerProduct);
//var_dump($containerOrder);