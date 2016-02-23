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
        $data['error_message'] = "";
        if (isset($_POST['register'])) {
            $first_name = (preg_match("[a-zA-Z]{1,20}", $_POST['first_name']))? $_POST['first_name'] : '';
            $last_name = (preg_match("[a-zA-Z]{1,20}", $_POST['last_name']))? $_POST['last_name'] : '';
            $password = (preg_match("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\\s).*$", $_POST['password']))? $_POST['password'] : '';
            $confirm_password = (preg_match("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\\s).*$", $_POST['confirm_password']))? $_POST['confirm_password'] : '';
            $email = (preg_match("^[-\\w.]+@([A-z0-9][-A-z0-9]+\\.)+[A-z]{2,4}$", $_POST['email']))? $_POST['email'] : '';
            $sex = ($_POST['sex'] == 'male' || $_POST['sex'] == 'female')? $_POST['sex'] : '';
            $birthday = (preg_match("[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])", $_POST['birthday']))? $_POST['birthday'] : '';

            if (($this->model->addUser($first_name, $last_name, $password, $confirm_password, $email, $sex, $birthday)) != false) {
                $_SESSION['user_login'] = $first_name;
                $_SESSION['user_email'] = $email;
            } else {
                $data['error_message'] = "Incorrect input data. Try again";
            }
        }

        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}