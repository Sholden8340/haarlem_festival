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

    public function home()
    {
        $timetable = $this->jazzModel->getTimetable();
        $data = [
            'title' => 'Jazz Home',
            'timetable' =>$timetable
        ];
        $this->view('jazz/home', $data, "");
    }
}
