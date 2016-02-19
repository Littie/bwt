<?php

class Controller_feedback_list extends Controller
{
    function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Feedback_List();
    }

    function action_index()
    {
        $data = $this->model->getFeedback();
        $this->view->generate('feedback_list_view.php', 'template_view.php', $data);
    }
}