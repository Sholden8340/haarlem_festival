<?php

class JazzModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTimetable()
    {
        $this->db->query("SELECT * FROM jazz_event
        JOIN event on jazz_event.event_id = event.event_id
        JOIN location on event.location_id = location.location_id
        JOIN artist on jazz_event.artist_id = artist.artist_id
        ORDER BY event.start_time");
        $resultSet = $this->db->resultSet();
        $events = array();

        for ($i = 0; $i < $this->db->rowCount(); $i++) {

            array_push($events, $this->resultToJazzEvent($resultSet[$i]));
        }

        return $this->formatTimetable($events);
    }

    private function resultToJazzEvent($result): JazzEvent
    {
        return new JazzEvent(
            $result->event_id,
            new Artist(
                $result->artist_id,
                $result->artist_name,
                $result->artist_description,
                $result->genre
            ),
            new Location(
                $result->location_id,
                $result->location_name,
                $result->location_description,
                $result->capacity,
            ),
            new DateTime($result->start_time),
            new DateTime($result->end_time)
        );
    }

    private function formatTimetable($events)
    {
        $timetable = [];

        foreach ($events as $key => $result) {
            $date = $result->startDateTime->format("Y-m-d");
            $location = $result->location->description;

            if (!isset($timetable[$date][$location])) {
                // Generate the timetable headers
                $timetable[$date][$location] = array($this->formatJazzHeader($result));
            }
            array_push($timetable[$date][$location], $this->formatJazzEvent($result));
        }
        return $timetable;
    }

    private function formatJazzEvent($event): string
    {

        $formattedEvent = 
        "<section class='event jazz-event table__cell'>
            <h3>{$event->artist->name}</h3>
            <span class='time'>
                {$event->startDateTime->format("H:i")} -  {$event->endDateTime->format("H:i")}
            </span>
        </section>";

        return $formattedEvent;
    }

    private function formatJazzHeader($event)
    {
        $formattedHeader = 
        "
        <section class='jazz-event-header table__cell'>
            <h3>{$event->location->name}</h3>
            <span class='date'> {$event->startDateTime->format("d-m")}</span>
            <span class='location'>{$event->location->description}</span>
        </section>";

        return $formattedHeader;
    }

    public function getJazzEventById(int $id): JazzEvent
    {
        $this->db->query("SELECT * FROM jazz_event
        JOIN event on jazz_event.event_id = event.event_id
        JOIN location on event.location_id = location.location_id
        JOIN artist on jazz_event.artist_id = artist.artist_id
        WHERE jazz_event.event_id = 5");

        $this->db->bind(":id", $id);
        return $this->resultToJazzEvent($this->db->singleRow());
    }
}
