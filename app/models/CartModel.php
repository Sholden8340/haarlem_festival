<?php

require_once "EventModel.php";
require_once "TicketModel.php";

class CartModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        if (!isset($_SESSION['cart'])) 
        {
            $_SESSION['cart'] = [];
        }
    }

    public function getTicketsFromCart() : array
    {
        $tickets = [];
        foreach ($_SESSION['cart'] as $key => $value) 
        {
            array_push($tickets, unserialize($value));
        }
        return $tickets;
    }

    public function addToCart(int $ticket_id, int $quantity) : void
    {
        $t = new TicketModel;
        $ticket = $t->getTicketById($ticket_id);
        $orderItem = new OrderItem($ticket, $quantity);
        array_push($_SESSION['cart'], serialize($orderItem));
    }

    public function displayTickets()
    {
        $tickets = [];
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $orderItem) {
                array_push($tickets, unserialize($orderItem));
            }
        }

        $formattedTickets= [];
        foreach ($tickets as $key => $value) {
            array_push($formattedTickets, $this->formatTicket($value));
        }
        return $formattedTickets;
    }

    public function removeFromCart(int $id)
    {
        // Remove
    }

    public function clearCart(){
        if(isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
    }

    private function formatTicket(OrderItem $t)
    {
        
        $cartRow = "
        <section class='cart-row'>
            <section class='ticket'>
                <span><h4>{Event_type} - {$t->event->artist->name} &euro;$t->price</h4></span>
                <span>". $t->event->startDateTime->format("d M H:i") ." - {$t->event->location->name} {$t->event->location->description}</span>
            </section>
            <section class='ticket-quantity'>
                <span>$t->quantity</span>
                <span>&euro;{($t->quantity * $t->price)}</span>
            </section>
        </section>
        ";
        return $cartRow;
    }

    private function isInCart(int $id) : bool
    {
        foreach ($_SESSION['cart'] as $key => $value) {
            if($value->ticket->event->eventId == $id){
                return true;
            }
        }
        return false;
    }

    private function updateQuantity(int $id, int $quantity) : void
    {
        foreach ($_SESSION['cart'] as $key => $value) {
            if($value->ticket->event->eventId == $id)
            {

            }
        }
    }
}
