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

    $data['title'] = 'Student toevoegen';
    $data['page'] = 'create';

    if (NULL == ($this->input->post('first_name')))
    {
      $this->load->view('templates/header', $data);
      $this->load->view('students/form');
      $this->load->view('templates/footer');

    }
    else
    {
      $this->student_model->set_student();
      //$this->index();
      header('Location: /students');
    }
  }

  public function remove ()
  {
    $data['title'] = 'Student verwijderen';
    $this->student_model->remove_student($this->uri->segment(3));
    header('Location: /students');
  }

  public function update()
  {
    $this->load->helper('form');

    $id = $this->uri->segment(3);

    $data['title'] = 'Student Wijzigen';
    $data['page'] = 'update/'.$id;
    $data['student'] = $this->student_model->get_students($id);

    if (NULL == $this->input->post('first_name'))
    {
      $this->load->view('templates/header', $data);
      $this->load->view('students/form');
      $this->load->view('templates/footer');

    }
    else
    {
      $this->student_model->update_student($id);
      //$this->index();
      header('Location: /students');
    }
  }
}
