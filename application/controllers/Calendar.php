<?php
class Calendar extends CI_Controller {

  public function __construct () {
    date_default_timezone_set("Europe/Amsterdam");
    parent::__construct();
    $this->load->model('calendar_model');
  }

  public function index () {
    $data['calendar'] = $this->calendar_model->get_calendar_items();
    $data['exam_started'] = $this->calendar_model->check_exam_progress();
    $data['title'] = "Agenda";

    $this->load->view('templates/header', $data);
    $this->load->view('calendar/index');
    $this->load->view('templates/footer');
  }

  public function remove () {
    $this->calendar_model->remove_calendar_item($this->uri->segment(3));
    header('Location: /calendar');
  }

  public function create () {
    $this->load->helper('form');
    $data['title'] = "Agenda item toevoegen";
    $data['page'] = "create";

    $data['students'] = $this->calendar_model->get_table('student');
    $data['examiner'] = $this->calendar_model->get_table('examiner');
    $data['exams'] = $this->calendar_model->get_table('exam_template');

    if (NULL == $this->input->post('date'))
    {
      $this->load->view('templates/header', $data);
      $this->load->view('calendar/form');
      $this->load->view('templates/footer');
    } else {
      $this->calendar_model->create();
      header('Location: /calendar');
    }
  }
}
