<?php
class Students extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('student_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['students'] = $this->student_model->get_students();
    $data['title'] = 'Studenten';

    $this->load->view('templates/header', $data);
    $this->load->view('students/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($slag = NULL)
  {
    $data['students'] = $this->student_model->get_students();
  }
}
