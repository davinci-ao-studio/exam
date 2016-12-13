<?php
class calendar_model extends CI_Model {
  public function __construct () {
    $this->load->database();
  }

  public function create () {
    $data = array('q_exam_id' => $this->input->post('exam'));
    $this->db->insert('result' , $data);


    $data = array(
      'student_id' => $this->input->post('student'),
      'result_id' => $this->db->insert_id());
    $this->db->insert('exam' , $data);

    $data = array(
      'examiner_id_1' => $this->input->post('examiner_1'),
      'examiner_id_2' => $this->input->post('examiner_2'),
      'exam_id' => $this->db->insert_id(),
      'date' => $this->input->post('date'),
      'adress' => $this->input->post('address'),
      'city' => $this->input->post('city'));
    $this->db->insert('calendar' , $data);
  }

  public function get_calendar_items ($id = FALSE) {
    if ($id === FALSE) {
      $this->db->select('*');
      $this->db->from('calendar');
      $this->db->join('exam', 'exam.id = exam_id');
      $this->db->join('student', 'student.id = student_id');
      $this->db->join('result', 'result.id = result_id');
      $this->db->join('q_exam', 'q_exam.id = q_exam_id');
      $query = $this->db->get();

      $this->db->select('*');
      $this->db->from('calendar');
      return $query->result_array();
    }
    $query = $this->db->get_where('calendar', array('id' => $id));
    return $query->row_array();
  }

  public function remove_calendar_item($id) {
    $this->db->delete('calendar', 'id = '.$id);
  }

  public function set_calendar_item() {
    $data = array(
      'examiner_id_1' => $this->input->post('date'),
    );
  }
  public function get_table ($table) {
    $this->db->select('*');
    $this->db->from($table);
    $query = $this->db->get();
    return $query->result_array();
  }
}
