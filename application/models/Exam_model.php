<?php
class Exam_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function get_exam() {
    $this->db->select('calendar.*');
    $this->db->select('q_exam.title');
    $this->db->select('student.first_name, student.last_name, student.ov_number');
    $this->db->from('calendar');
    $this->db->join('exam', 'exam.id = exam_id');
    $this->db->join('student', 'student.id = student_id');
    $this->db->join('result', 'result.id = result_id');
    $this->db->join('q_exam', 'q_exam.id = q_exam_id');
    $query = $this->db->get();
    $row = $query->row_array();
    return $row;
  }

  public function get_exam_questions() {
    $this->db->select('questions.question_title, questions.possible_score');
    $this->db->select('subtitle.title');
    $this->db->from('questions');
    $this->db->join('subtitle', 'questions.subtitle_id = subtitle.id', 'right');
    $this->db->join('q_exam', 'subtitle.q_exam_id = q_exam.id');
    $this->db->order_by('title asc');
    $this->db->order_by('question_title asc');
    $query = $this->db->get();
    return $query->result_array();

  }
}
