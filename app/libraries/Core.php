<?php
//NO ONE TOUCH THIS FILE UNLESS U ARE ADDING NEW METHODS IN AND KNOW WHAT U ARE DOING
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {

        $url = $this->getUrl();
        if (!empty($url[0])) {
            //Look in 'controllers' for first value and uswords will capitalize the first letter
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                //Will set a new controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }
        //Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        //Check for the second part of the url
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        //Get params
        //Check if there are any parameters and if not then keep the array empty
        $this->params = $url ? array_values($url) : [];

        //Callback with the params of the array
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }


    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            // Allow you to filter variables as a string or number
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //Break it into an array
            $url = explode('/', $url);
            return $url;
        }
    }
}
