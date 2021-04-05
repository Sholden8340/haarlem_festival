<?php

require_once("CartModel.php");

class OrderModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function storeOrderInSession($order)
    {
        unset($_SESSION['cart']);
        $_SESSION['cart'] = serialize($order);
    }

    public function retrieveOrderFromSession()
    {
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {

            $order = unserialize($_SESSION['cart']);

            if ($order instanceof Order) {
                return $order;
            }
        }

        return false;
    }

    public function confirmOrder()
    {
        // Check Id
    }

    private function storeOrderItem(OrderItem $orderItem)
    {
        $ticket_id = $orderItem->ticket->ticketId;
        $quantity = $orderItem->quantity;
    }

    public function displayOrder()
    {
        $cartModel = new CartModel();
        return $cartModel->displayTickets();
    }
}
