<?php

class Controller_weather extends Controller
{
    private $data = array();

    function __construct()
    {
        session_start();

        $this->view = new View();
        $this->model = new Model_Weather();
    }

    function action_index()
    {
        if (isset($_SESSION['user_login'])) {
            $this->data = $this->model->get_data();
            $this->data['weather'] = 'access granted';
        } else {
            $this->data['weather'] = '';
        }


        $this->view->generate('weather_view.php', 'template_view.php', $this->data);
    }

}