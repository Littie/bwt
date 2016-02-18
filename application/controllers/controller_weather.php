<?php

class Controller_wether extends Controller
{
    function action_index()
    {
        $this->view->generate('weather_view.php', 'template_view.php');
    }

}