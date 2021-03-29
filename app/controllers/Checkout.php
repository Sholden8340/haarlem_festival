<?php

class Checkout extends Controller
{
    public function __construct()
    {
        $this->orderModel = $this->model('OrderModel');
    }

    public function index()
    {
        $this->display();
    }

    public function display()
    {
        if (!isset($_SESSION['user_id']) && false) {
            header('location: ' . URLROOT . '/users/login');
        }

        $data = [
            'title' => 'Checkout',
            'order' => $this->orderModel->getOrder()
        ];
        $this->view('checkout/display', $data, "");
    }

    public function confirm()
    {
        
    }

}
