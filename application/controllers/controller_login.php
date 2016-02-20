<?php

class Controller_login extends Controller
{
    private $data = array();

    function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Login();
    }

    function action_index()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

//            $name = $this->model->checkAuthenticationData($email, $password);

            if (($name = $this->model->checkAuthenticationData($email, $password)) !== false) {
                $this->data['login_status'] = "access_granted";
                $this->data['name'] = $name;
            } else {
                $this->data['login_status'] = "access_denied";
            }

        } else {
            $this->data['login_status'] = "";
        }

        $this->view->generate('login_view.php', 'template_view.php', $this->data);
    }
}