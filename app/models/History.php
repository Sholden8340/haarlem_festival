<?php


class History
{
    private $db;
    public $data;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getHistoryEvents(){


        $this->db->query('SELECT history_event_id,:lang,tour_guide,location_id,starting_time,tour_date from history_event');
        $this->db->bind(':lang','language');
        $result =$this->db->resultSet();
        return $result;


    }


    public function GetHistoryEventByLanguage($language){
        $this->db->bind(':lang','language');
        return$this->db->query('SELECT language,tour_guide,location_id,starting_time,tour_date FROM history_events WHERE :lang :lang');
    }

}