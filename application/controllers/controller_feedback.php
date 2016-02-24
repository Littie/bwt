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
            if ($_POST['capcha'] === $_SESSION['code']) {
                if ($_POST['message'] !== '') {
                    $data['send'] = 'feedback_sent';

                    if (isset($_SESSION['user_login']) && isset($_SESSION['user_email'])) {
                        $this->model->sendFeedback($_SESSION['user_login'], $_POST['message']);
                    } elseif ($_POST['first_name'] !== '' && $_POST['email'] !== '') {
//                        $this->model->insertUser($_POST['first_name'], $_POST['email']);
//                        $this->model->sendFeedback($_POST['first_name'], $_POST['message']);
                        $this->model->sendGuestFeedback($_POST['first_name'], $_POST['email'], $_POST['message']);
                    }
                } else {
                    $data['send'] = 'All fields are required';
//                    $data['capcha'] = '';
                }
            } else {
                $data['send'] = '';
                $data['capcha'] = "wrong capcha";
            }
        } else {
            $data['send'] = '';
            $data['capcha'] = '';
        }

        $this->view->generate('feedback_view.php', 'template_view.php', $data);
    }
}