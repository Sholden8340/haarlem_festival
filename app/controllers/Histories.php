<?php


class Histories extends Controller
{
    public function __construct()
    {
        $this->historyModel = $this->model('History');
    }

    public function detail()
    {
        $this->view('histories/detail');
    }
    public function tickets(){
        $result = $this->historyModel->getHistoryEvents();

        foreach ($result as $item){
            $data[]=array('history_event_id'=>$item->history_event_id,'language'=>$item->language,
                'tour_guide'=>$item->tour_guide, 'location_id'=>$item->location_id,
                'starting_time'=>$item->starting_time,'tour_date'=>$item->tour_date);
        }

        $this->view('histories/tickets',$data);
    }

}
