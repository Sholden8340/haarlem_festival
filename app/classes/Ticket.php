<?php

class Ticket
{
    private int $ticketId;
    private Event $event;
    private float $price;

    public function __construct(int $ticketId, Event $event, float $price = 0)
    {
        $this->ticketId = $ticketId;
        $this->event = $event;
        $this->price = $price;
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
