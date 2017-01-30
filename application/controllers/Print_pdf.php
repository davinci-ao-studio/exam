<?php
class Print_pdf extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('print_model');
  }
  function index () {
    $data['print_info'] = $this->print_model->print_exam();
    $this->load->view('print/index', $data);
  }
}
