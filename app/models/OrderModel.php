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
        $order = $this->retrieveOrderFromSession();
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_Ds3fz4U9vNKxzCfVvVHJT2sgW5ECD8");

        $this->storeOrder($order);
        $order = $this->retrieveOrderFromSession();

        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => number_format($order->getTotal(), 2)
            ],
            "description" => "Haarlem Festival Order Number " . $order->orderId,
            "redirectUrl" => URLROOT . "/checkout/viewOrder/"
        ]);

        try{
            header("Location: " . $payment->getCheckoutUrl(), true, 303);
        }catch (\Mollie\Api\Exceptions\ApiException $e) {
            echo "API call failed: " . htmlspecialchars($e->getMessage());
        }

    }

    private function storeOrder(Order $order)
    {
        $order = $this->retrieveOrderFromSession();
        $userId = $_SESSION['userId'];
        $order_date = date('Y-m-d h:i:s');

        $this->db->query('INSERT INTO `order` (customer_id, order_date, total) VALUES (:customer_id,:order_date,:total)');
        $this->db->bind(':customer_id', $userId);
        $this->db->bind(':order_date', $order_date);
        $this->db->bind(':total', $order->getTotal());
        $this->db->execute();

        $order->orderId = $this->db->lastInsertId();

        $this->storeOrderItems($order);
        $this->storeOrderInSession($order);
    }

    private function storeOrderItems(Order $order)
    {
        $orderId = $order->orderId;
        foreach ($order->orderItems as $key => $orderItem) 
        {
            $ticketId = $orderItem->ticket->ticketId;
            $quantity = $orderItem->quantity;

            $this->db->query('INSERT INTO `order_item` (order_id, ticket_id, quantity) VALUES (:order_id,:ticket_id,:quantity)');
            $this->db->bind(':order_id', $orderId);
            $this->db->bind(':ticket_id', $ticketId);
            $this->db->bind(':quantity', $quantity);

            $this->db->execute();
        }
    }

    public function displayOrder()
    {
        $order = $this->retrieveOrderFromSession();
        $orderItems = $order->orderItems;
        $tickets = [];

        foreach ($orderItems as $key => $value) {
            array_push($tickets, $this->formatTicket($value));
        }

        return $tickets;
    }

    private function formatTicket($orderItem)
    {
        $t = $orderItem->ticket;
        $cartRow = "
        <section class='cart-row'>
            <section class='ticket'>
                <span><h4>{$t->event->category} - {$t->event->artist->name} <span class='cart-ticket-price'>&euro;$t->price</span></h4></span>
                <span>" . $t->event->startDateTime->format("d M H:i") . " - {$t->event->location->name} {$t->event->location->description}</span>
            </section>
            <section class='ticket-quantity'>
               X $orderItem->quantity
            </section>
            <section class='ticket-total'>
                <span class='cart-ticket-total'>&euro;" . $orderItem->quantity * $t->price . "</span>
            </section>
        </section>
        ";

        return $cartRow;
    }

    public function isOrderPaid() : bool
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_Ds3fz4U9vNKxzCfVvVHJT2sgW5ECD8");
        $payment = $mollie->payments->get($_POST["id"]);

        if($payment->isPaid())
        {
            $this->db->query('UPDATE `order_item` SET `status` = "paid"');
            $this->db->execute();
            unset($_SESSION['cart']);
        }
        return $payment->isPaid();
    }
}
