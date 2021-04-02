<?php

class JazzEvent extends Event
{
    private Artist $artist;
    private Location $location;

    public function __construct(int $eventId, Artist $artist, Location $location, DateTime $startDateTime, DateTime $endDateTime, string $category ='Jazz')
    {
        $this->artist = $artist;
        $this->location = $location;
        $this->eventId = 1;
        parent::__construct($eventId, $startDateTime, $endDateTime, $category);
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
