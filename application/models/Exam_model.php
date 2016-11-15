<?php

class Exam_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getData()
        {
          $result = $this->db->get('calendar')->result_array();
          //$result->db->join('student', 'student_id = calendar.student.id', 'left');
          return $result;
        }
}
