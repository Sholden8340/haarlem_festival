<?php


class Controller
{
    public function model($model){
        //require the model file and return it
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    //Check if the view file exists an if it does then load the file if not send an error
    public function view($view, $data = []){
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        }
        else{
            die("view does not exist");
        }
    }
}