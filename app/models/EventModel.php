<?php

require_once "JazzModel.php";
// require_once "DanceModel.php";
// require_once "HistoryModel.php";

class EventModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getEventById(int $id)
    {
        $this->db->query("SELECT category FROM event WHERE event_id = $id");
        $this->db->execute();
        $category = strtolower($this->db->singleRow()->category);

        switch ($category) {
            case 'jazz':
                return $this->getJazzEventbyId($id);
            case 'dance':
                break;
            case 'history':
                break;
            default:
            // Error
                return false;
                break;
        }
    }

    public function getJazzEventbyId(int $id): JazzEvent
    {
        $jazzDb = new JazzModel();
        return $jazzDb->getJazzEventById($id);
    }
}
