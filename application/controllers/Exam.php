<?php
class Exam extends CI_Controller
{
  public function __construct()
  {
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
    $this->load->model('calendar_model');
    $this->calendar_model->remove_calendar_item($this->uri->segment(3));
    header('location://exam.local/exam');
  }
}
