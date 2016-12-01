<?php
class Home extends CI_Controller {

  public function view($page = 'home')
  {
    $this->load->model('home_model');
    $data['calendar'] = $this->home_model->get_todays_exams();

    if ( ! file_exists(APPPATH.'views/'.$page.'/index.php'))
    {
            // Whoops, we don't have a page for that!
            $this->load->view('templates/header', $data);
            show_404();
            $this->load->view('templates/footer', $data);
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view($page.'/index', $data);
    $this->load->view('templates/footer', $data);
  }
}
