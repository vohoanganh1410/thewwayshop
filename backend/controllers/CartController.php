<?php

require_once 'models/Cart.php';
class CartController
{
    public function index() {
        $cart_model = new Cart();
        $cart = $cart_model->index();

        require_once 'views/cart/cart.php';
    }

}