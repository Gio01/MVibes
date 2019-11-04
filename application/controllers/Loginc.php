<?php
class Loginc extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    //call in the is_logged in function from the User_model model
    //so every time we need to check if the user is logged in 
    //we just need to call onto this method inide the method
    //we are making in the controller. Just call that method
    //at the beginning of the new method and if they are 
    //not logged in then redirect them to another view! 

    public function logginin()
    {

        $username = $this->input->get('username');
        $password = $this->input->get('pass');

        $res = $this->User_model->login($username, $password);
        if ($res = true) {
            redirect('/member');
        }

        if (!$this->User_model->is_loggedin()) {
            redirect('/login');
            return;
        }

        //We add whatever code we need to direct them to the
        //members area and then we need to fix up that view! 

    }

    public function register()
    {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->User_model->registration($name, $username, $hash);

        redirect('/member');
    }

    public function view()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }
}
