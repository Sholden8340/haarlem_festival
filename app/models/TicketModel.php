<?php

require_once "EventModel.php";

class TicketModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTickets()
    {
        //
    }

    private function getTicketTest() : Ticket
    {
        $artist = new Artist(1, "Gare Du Nord", "Very cool jazz mans", "Classic Jazz");
        $location = new Location(1, "Patronaat", "Main Hall", 500);
        $event = new JazzEvent(101, $artist, $location, new DateTime('now'), new DateTime('now'));
        return new Ticket(0, $event, 15);
    }

    public function getTicketById(int $id): Ticket
    {
        $this->db->query("SELECT * FROM ticket WHERE ticket_id = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->resultToTicket($this->db->singleRow());
    }

    private function resultToTicket($result): Ticket
    {
        $eventDB = new EventModel();
        return new Ticket($result->ticket_id, $eventDB->getEventById($result->event_id), $result->ticket_price);
    }
}
