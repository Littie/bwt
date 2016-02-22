<?php


class Controller_main extends Controller
{
    function __construct()
    {
        session_start();

        $this->view = new View();
        $this->model = new Model_main();

    }

    function action_index()
    {
        if (isset($_POST['register'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $email = $_POST['email'];
            $sex = $_POST['sex'];
            $birthday = $_POST['birthday'];

            if (($this->model->addUser($first_name, $last_name, $password, $confirm_password, $email, $sex, $birthday)) != false) {
                $_SESSION['user_login'] = $first_name;
            }
        }

        $this->view->generate('main_view.php', 'template_view.php');
    }
}