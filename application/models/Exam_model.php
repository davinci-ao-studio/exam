<?php
class Exam_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function get_exam() {
    $this->db->select('calendar.*');
    $this->db->select('exam.id');
    $this->db->select('exam_template.title');
    $this->db->select('student.first_name, student.last_name, student.ov_number');
    $this->db->from('calendar');
    $this->db->join('exam', 'exam.id = exam_id');
    $this->db->join('student', 'student.id = student_id');
    $this->db->join('exam_template', 'exam_template.id = exam_template_id');
    $this->db->where('calendar.id', $this->uri->segment(3));
    $query = $this->db->get();
    $row = $query->row_array();
    return $row;
  }

  public function get_exam_questions() {
    $this->db->select('questions.id, questions.question_title, questions.possible_score, questions.id');
    $this->db->select('subtitle.title');
    $this->db->select('answers.answer');
    $this->db->from('questions');
    $this->db->join('subtitle', 'questions.subtitle_id = subtitle.id', 'right');
    $this->db->join('exam_template', 'subtitle.exam_template_id = exam_template.id');
    $this->db->join('answers', 'answers.question_id = questions.id', 'left');
    $this->db->order_by('title asc');
    $this->db->order_by('question_title asc');
    $query = $this->db->get();
    return $query->result_array();

  }

  public function save_exam()
  {
    if ($this->input->post('submit')) {
      $this->db->where('id', $this->uri->segment(3));
      $this->db->update('exam', array('submit' => $this->input->post('submit')));
    }
    foreach ($_POST as $key => $value) {
      $data = array(
        'exam_id' => $this->uri->segment(3),
        'question_id' => $key,
        'answer' => (bool)$value);
      if (!empty($this->db->get_where('answers', array('question_id' => $key))->result_array())) {
        $this->db->where('exam_id', $this->uri->segment(3));
        $this->db->where('question_id', $key);
        $this->db->update('answers', $data);
      } else {
        $this->db->insert('answers', $data);
      }
    }
  }
};
