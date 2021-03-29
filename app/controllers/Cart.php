<?php

class Cart extends Controller
{
    public function __construct()
    {
        $this->cartModel = $this->model('CartModel');
    }

    public function display()
    {
        $data['tickets'] = $this->cartModel->displayTickets();
        $this->view("cart/display", $data);
    }

    public function checkout()
    {
        $this->view("cart/checkout");
    }

    public function add(int $ticket_id, int $quantity)
    {
        $this->cartModel->addToCart($ticket_id, $quantity);
        header('location: ' . URLROOT . '/cart/display');
    }

    public function clear(){
        $this->cartModel->clearCart();
        header('location: ' . URLROOT . '/cart/display');
    }
}
