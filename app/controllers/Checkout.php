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
        if(!isLoggedIn())
        {
            header('location: ' . URLROOT . '/users/login');
        }
        $data = [
            'title' => 'Checkout',
            'order' => $this->orderModel->displayOrder()
        ];
        $this->view('checkout/display', $data);
    }

    public function confirm()
    {
        
    }

}
