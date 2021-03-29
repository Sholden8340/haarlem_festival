<?php


abstract class Event
{
    protected int $eventId;
    // protected string $name;
    protected string $category; // Category is the class name of the child class
    protected DateTime $startDateTime;
    protected DateTime $endDateTime;

    public function __construct(int $eventId, DateTime $startDateTime, DateTime $endDateTime) 
    {
        $this->eventId = $eventId;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
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
