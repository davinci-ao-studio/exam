<?php
class Print_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function print_exam($slug = FALSE)
  {
    if ($slug === FALSE)
    {
      $this->db->select('*');
      $this->db->from('exam')->where('student_id', $this->uri->segment(2));
      $this->db->join('student', 'student.id = student_id');
      $this->db->join('result', 'result.id = result_id');
      $this->db->join('calendar', 'exam.id = exam_id');
      $query = $this->db->get();
      return $query->result_array();
    }
    $query = $this->db->get_where('exam', array('id' => $slug));
    return $query->row_array();
  }
}
