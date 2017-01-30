<?php
class Exam extends CI_Controller
{
  public function __construct()
  {
    date_default_timezone_set("Europe/Amsterdam");
    parent::__construct();
    $this->load->model('exam_model');
  }
  function conduct () {
    $this->load->helper('form');

    $data['exam_info'] = $this->exam_model->get_exam();
    $data['exam_questions'] = $this->exam_model->get_exam_questions();

    $this->load->view('templates/header', $data);
    $this->load->view('exam/conduct');
    $this->load->view('templates/footer');
  }
  function save () {
    $this->exam_model->save_exam();
    $calendar_id = $this->exam_model->get_calendar_id_by_exam_id($this->uri->segment(3));
    $this->load->model('calendar_model');
    header('location://exam.local/exam');
  }
}
