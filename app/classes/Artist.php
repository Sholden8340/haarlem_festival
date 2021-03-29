<?php


class Artist
{
    private int $artistId;
    private string $name;
    private string $description;
    private string $genre;
    // private string $image;
    private array $socialLinks;

    public function __construct(int $artistId, string $name, string $description, string $genre)
    {
        $this->artistId = $artistId;
        $this->name = $name;
        $this->description = $description;
        $this->genre = $genre;
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
