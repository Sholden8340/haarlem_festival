<?php

require_once 'TicketModel.php';
require_once "EventModel.php";
require_once "TicketModel.php";

class OrderModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTickets()
    {
       $cartModel = new CartModel();
       return $cartModel ->getTicketsFromCart();
    }

    public function getFormattedTickets(){
        $cartModel = new CartModel();
        return $cartModel ->displayTickets();
    }

}
