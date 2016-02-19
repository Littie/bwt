<?php


class Controller_feedback extends Controller
{
    function action_index()
    {

        if (isset($_POST['send'])) {
            $data['send'] = "feedback_sent";
        } else {
            $data['send'] = "";
        }

        $this->view->generate('feedback_view.php', 'template_view.php', $data);
    }
}