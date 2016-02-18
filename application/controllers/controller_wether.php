<?php

class Controller_wether extends Controller
{
    function action_index()
    {
        $this->view->generate('wether_view.php', 'template_view.php');
    }

}