<?php 

    class Dance extends Controller {

        public function __construct() {

            // storing dates and venues and timetable through dance model
            $this->danceModel = $this->model('DanceModel');
            $this->venues = $this->danceModel->venues;
            $this->dates = $this->danceModel->dates;
            $this->timetable = $this->danceModel->getTimetable();
        }

        public function home() {

            $data = [
                'title' => 'Dance Home',
                'timetable' => $this->timetable,
                'dates' => $this->dates,
                'venues' => $this->venues
            ];
            $this->view('dance/home', $data);
        }

        public function event() {
            $data = [
                    'title' => 'Dance Home',
                    'timetable' => $this->timetable,
                    'dates' => $this->dates,
                    'venues' => $this->venues,
                    'event_id' => '',
                    'artist_data' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'title' => 'Dance Home',
                    'timetable' => $this->timetable,
                    'dates' => $this->dates,
                    'venues' => $this->venues,
                    'event_id' => trim($_POST['event_id']),
                    'artist_data' => $this->danceModel->getArtist($_POST['event_id'])
                ];
                
                $this->view('dance/home', $data);
            }
        }
    }
?>