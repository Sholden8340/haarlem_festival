<?php

class Cart extends Controller
{
    public function __construct()
    {
        $this->cartModel = $this->model('CartModel');
    }

    public function index()
    {
        $this->display();
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

    public function add(int $ticket_id)
    {
        $this->cartModel->addToCart($ticket_id);
        header('location: ' . URLROOT . '/cart/display');
    }

    public function clear(){
        $this->cartModel->clearCart();
        header('location: ' . URLROOT . '/cart/display');
    }
}
