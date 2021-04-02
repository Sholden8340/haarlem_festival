<?php

class Order
{
    private int $orderId;
    private int $customerId;
    private array $orderItems;
    private string $status;

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
}
