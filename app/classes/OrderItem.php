<?php

class OrderItem
{
    private Ticket $ticket;
    private int $quantity;

    public function __construct(Ticket $t, int $q) 
    {
        $this->ticket = $t;
        $this->quantity = $q;
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
}
