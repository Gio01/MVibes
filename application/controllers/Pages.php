<?php

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter of the page so about will appear as About in the page

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}
