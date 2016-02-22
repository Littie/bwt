<?php

class Controller_feedback extends Controller
{

    function __construct()
    {
        session_start();

        $this->view = new View();
        $this->model = new Model_Feedback();
    }

    function action_index()
    {
        if (isset($_POST['send'])) {
            if (isset($_SESSION['user_login']) && isset($_SESSION['user_email'])) {
                $this->model->sendFeedback($_SESSION['user_login'], $_POST['message']);
            } else {
                $this->model->insertUser($_POST['first_name'], $_POST['email']);
                $this->model->sendFeedback($_POST['first_name'], $_POST['message']);
            }

            $data['send'] = 'feedback_sent';
        } else {
            $data['send'] = '';
        }

        $this->view->generate('feedback_view.php', 'template_view.php', $data);
    }
}