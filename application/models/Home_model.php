<?php
class Home_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_todays_exams($slug = FALSE)
  {
    if ($slug === FALSE)
    {
      $this->db->select('*');
      $this->db->from('calendar');
      $this->db->join('exam', 'exam.id = exam_id');
      $this->db->join('student', 'student.id = student_id');
      $this->db->join('result', 'result.id = result_id');
      $this->db->join('q_exam', 'q_exam.id = q_exam_id');
      $query = $this->db->get();
      return $query->result_array();
    }
    $query = $this->db->get_where('calendar', array('id' => $slug));
    return $query->row_array();
  }
}
