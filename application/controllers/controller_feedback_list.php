<?php

class Controller_feedback_list extends Controller
{
    function action_index()
    {
        $this->view->generate('feedback_list_view.php', 'template_view.php');
    }
}