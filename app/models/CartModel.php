<?php

require_once "EventModel.php";
require_once "TicketModel.php";
require_once "OrderModel.php";

class CartModel
{
    private Order $order;
    private OrderModel $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $order = $this->orderModel->retrieveOrderFromSession();

        if (!isset($_SESSION['cart']) || !$order) // check if session is empty or error retrieving order
        {
            $_SESSION['cart'] = [];
        } else {
            $this->order = $order;
        }
    }

    public function getTicketsFromCart(): array
    {
        $tickets = [];
        foreach ($this->order->orderItems as $key => $value) {
            array_push($tickets, $value->ticket);
        }
        return $tickets;
    }

    public function addToCart(int $ticketId): void
    {
        $quantity = null;
        if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
        }
        else{
            die();
        }

        $t = new TicketModel;
        $ticket = $t->getTicketById($ticketId);
        $orderItem = null;

        if ($ticket instanceof Ticket) {
            $orderItem = new OrderItem($ticket, $quantity);
        } else {
            die("Ticket not found error");
        }
        if (isset($this->order) && $this->order != null) {
            $isInCart = false;

            //die(var_dump($this->order->orderItems));

            foreach ($this->order->orderItems as $key => $value) {

                if ($value->ticket->ticketId == $ticketId) {
                    // ticket is in cart already so increment
                    $this->order->orderItems[$key]->quantity = $quantity;
                    
                    $isInCart = true;
                    break;
                }
            }
            if (!$isInCart) {
                $this->order->addOrderItem($orderItem);
            }
        } else {
            if (isLoggedIn()) {
                $this->order = new Order(array($orderItem), $_SESSION['userID']);
            } else {
                $this->order = new Order(array($orderItem));
            }
        }
        $this->orderModel->storeOrderInSession($this->order);
    }

    public function displayTickets()
    {
        $formattedTickets = [];
        if (isset($this->order)) {
            foreach ($this->order->orderItems as $key => $value) {
                array_push($formattedTickets, $this->formatTicket($value));
            }
        }
        return $formattedTickets;
    }

    public function removeFromCart(int $id)
    {
        foreach ($this->order->orderItems as $key => $orderItem) {
            if ($orderItem->ticket->ticketId == $id) {
                unset($this->order->orderItems[$key]);
                $this->OrderModel->storeOrderInSession($this->order);
            }
        }
    }

    public function clearCart()
    {
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
    }

    private function formatTicket(OrderItem $orderItem): string
    {
        $t = $orderItem->ticket;
        $cartRow = "
        <section class='cart-row'>
            <section class='ticket'>
                <span><h4>{$t->event->category} - {$t->event->artist->name} &euro;$t->price</h4></span>
                <span>" . $t->event->startDateTime->format("d M H:i") . " - {$t->event->location->name} {$t->event->location->description}</span>
            </section>
            <section class='ticket-quantity'>
                <span> X $orderItem->quantity</span>
            </section>
            <section class='ticket-total'>
                <span>&euro;" . $orderItem->quantity * $t->price . "</span>
            </section>
        </section>
        ";
        return $cartRow;
    }
}
