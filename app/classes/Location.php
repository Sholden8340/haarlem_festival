<?php

class Location
{
    private int $locationId;
    private string $name;
    private string $description;
    private int $capacity;

    public function __construct(int $locationID, string $name, string $description, int $capacity) {
        $this->locationID = $locationID;
        $this->name = $name;
        $this->description = $description;
        $this->capacity = $capacity;
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
