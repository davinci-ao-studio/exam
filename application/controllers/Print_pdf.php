<?php
class Print_pdf extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('calendar_model');
  }
  function index () {
    $data['print_info'] = $this->calendar_model->get_calendar_items();

    var_dump($data);
    $this->load->view('print/index', $data);
  }
}
