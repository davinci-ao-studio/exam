<?php
class Pages extends CI_Controller {

  public function view($page = 'home')
  {
    switch ($page) {
      case 'students':
        $this->load->model('student_model');
        $data['students'] = $this->student_model->get_students();
        break;

      default:
        $this->load->model('home_model');
        $data['calendar'] = $this->home_model->get_todays_exams();
        break;
    }

    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            // Whoops, we don't have a page for that!
            show_404();
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}
