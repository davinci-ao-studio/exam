<?php
class Student_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_students($id = FALSE)
  {
    if ($id === FALSE)
    {
      $query = $this->db->get('student');
      return $query->result_array();
    }
    $query = $this->db->get_where('student', array('id' => $id));
    return $query->row_array();
  }
  public function set_student()
  {
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'ov_number' => $this->input->post('ov_number'),
    );

    return $this->db->insert('student', $data);
  }
  public function remove_student($id)
  {
    return $this->db->delete('student', array('id' => $id));
  }
  public function update_student($id)
  {
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'ov_number' => $this->input->post('ov_number'),
    );

    return $this->db->update('student', $data, "id = ".$id);
  }
}
