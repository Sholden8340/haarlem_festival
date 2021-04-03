<?php


class Jazz extends Controller
{
    public function __construct()
    {
        $this->jazzModel = $this->model('JazzModel');
    }

    public function index()
    {
        $this->home();
    }

    public function home(int $eventId = null)
    {
        $timetable = $this->jazzModel->getTimetable();
        $data = [
            'title' => 'Jazz Home',
            'timetable' =>$timetable
        ];

        if ($eventId != null) {
            $data['ticket'] = $this->jazzModel->getJazzTicketById($eventId);
        }

        $this->view('jazz/home', $data);
    }
}
