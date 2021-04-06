<?php

class Order
{
    private int $orderId;
    private int $customerId;
    private array $orderItems;
    private string $status = 'pending';

    public function __construct(array $orderItems, int $customerId = null, string $status = null, int $orderId = null)
    {
        $this->orderItems = $orderItems;

        if ($customerId !=null) {
            $this->customerId = $customerId;
        }
        if ($status !=null) {
            $this->status = $status;
        }
        if ($orderId !=null) {
            $this->orderId = $orderId;
        }
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function addOrderItem(OrderItem $orderItem)
    {
        array_push($this->orderItems, $orderItem);
    }

    public function removeOrderItem(int $key)
    {
        unset($this->orderItems[$key]);
        $this->orderItems = array_values($this->orderItems); // re 0 index array
    }
    public function updateOrderItemQuantity(int $key, int $quantity)
    {
        $this->orderItems[$key]->quantity = $quantity;
    }

    public function getTotal() : float
    {
        $total = 0;

        foreach ($this->orderItems as $key => $value) {
            $total += $value->quantity * $value->ticket->price;
        }

        return $total;
    }
}
