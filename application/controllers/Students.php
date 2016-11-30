<?php
class Students extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('student_model');
    $this->load->helper('url_helper');
  }

  public function index($page = 'index')
  {
    $data['students'] = $this->student_model->get_students();
    $data['title'] = 'Studenten';

    $this->load->view('templates/header', $data);
    $this->load->view('students/'.$page, $data);
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'New student';

    $this->form_validation->set_rules('first_name', 'Voornaam', 'required');
    $this->form_validation->set_rules('last_name', 'Achternaam', 'required');
    $this->form_validation->set_rules('ov_number', 'OV Nummer', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header', $data);
      $this->load->view('students/create');
      $this->load->view('templates/footer');

    }
    else
    {
      $this->student_model->set_student();
      $this->index();
    }
  }
}
