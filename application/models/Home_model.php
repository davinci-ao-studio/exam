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
      $query = $this->db->get('calendar');
      return $query->result_array();
    }
    $query = $this->db->get_where('calendar', array('slug' => $slug));
    return $query->row_array();
  }
}
