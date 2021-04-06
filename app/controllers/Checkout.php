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
        if (!isLoggedIn()) {
            header('location: ' . URLROOT . '/users/login');
        }
        $data = [
            'title' => 'Checkout',
            'tickets' => $this->orderModel->displayOrder(),
            'order' => $this->orderModel->retrieveOrderFromSession()
        ];
        $this->view('checkout/display', $data);
    }

    public function confirm()
    {
        $data = [
            'title' => 'Checkout',
            'order' => $this->orderModel->retrieveOrderFromSession()
        ];

        $this->orderModel->confirmOrder();
    }

    public function viewOrder()
    {    
        $data = [
            'title' => 'Checkout',
            'order' => $this->orderModel->retrieveOrderFromSession(),
            'tickets' => $this->orderModel->displayOrder(),
        ];
        $this->view('checkout/confirm', $data);
    }
}
