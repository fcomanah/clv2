<?php

class Pages extends CI_Controller {

    public function view($page = 'home')
    {

        if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $user = 'mfer';
        define ('BASE_URI', __DIR__ );
        define ('BASE_URL', "http://" . $_SERVER['SERVER_NAME'] . '/' . $user . '/');
        $data['BASE_URL'] = BASE_URL;
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }

}
