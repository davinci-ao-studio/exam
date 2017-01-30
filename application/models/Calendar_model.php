<?php
class calendar_model extends CI_Model {
  public function __construct () {
    $this->load->database();
  }

  public function create () {
    $data = array('q_exam_id' => $this->input->post('exam'));
    $this->db->insert('result' , $data);


    $data = array(
      'adress' => $this->input->post('address'),
      'city' => $this->input->post('city'),
      'examiner_id_1' => $this->input->post('examiner_1'),
      'examiner_id_2' => $this->input->post('examiner_2'),
      'student_id' => $this->input->post('student'),
<<<<<<< HEAD
      'exam_template_id' => $this->input->post('exam'));
=======
      'result_id' => $this->db->insert_id());
>>>>>>> pdf
    $this->db->insert('exam' , $data);

    $data = array(
      'exam_id' => $this->db->insert_id(),
      'date' => $this->input->post('date'));
    $this->db->insert('calendar' , $data);
  }

  public function get_calendar_items ($id = FALSE) {
    if ($id === FALSE) {
      $this->db->select('calendar.*');
<<<<<<< HEAD
      $this->db->select('exam.submit,exam.examiner_id_1, exam.examiner_id_2, exam.adress, exam.city');
      $this->db->select('exam_template.title');
      $this->db->select('student.first_name, student.last_name');
      $this->db->select('(select count(answers.answer) from answers where answers.exam_id = exam.id) AS answer_count');
      $this->db->from('calendar');
      $this->db->join('exam', 'exam.id = calendar.exam_id');
      $this->db->join('student', 'student.id = exam.student_id');
      $this->db->join('exam_template', 'exam_template.id = exam.exam_template_id');
      $this->db->order_by('calendar.date');
=======
      $this->db->select('q_exam.title');
      $this->db->select('student.first_name, student.last_name');
      $this->db->select('exam.student_id');
      $this->db->from('calendar');
      $this->db->join('exam', 'exam.id = exam_id');
      $this->db->join('student', 'student.id = student_id');
      $this->db->join('result', 'result.id = result_id');
      $this->db->join('q_exam', 'q_exam.id = q_exam_id');
>>>>>>> pdf
      $query = $this->db->get();
      //return $this->db->last_query();
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

  public function check_exam_progress ()
  {
  }
}
