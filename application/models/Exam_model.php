<?php

class Exam_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function getIndexData()
        {
          $this->db->select("`calendar`.*, `user1`.`username` AS `docent1`, `user2`.`username` AS `docent2`, `student`.`first_name` AS `student_first_name`, `student`.`last_name` AS `student_last_name`");
          $this->db->from("calendar");
          $this->db->join('user` AS `user1', 'user1.id = calendar.user_id_1', 'left');
          $this->db->join('user` AS `user2', 'user2.id = calendar.user_id_2', 'left');
          $this->db->join('student', 'student.id = calendar.student_id', 'left');
          $result = $this->db->get()->result_array();

          return $result;
        }

        public function getStudentsData()
        {
          $this->db->select("`student`.*");
          $this->db->from("student");
          $result = $this->db->get()->result_array();

          return $result;
        }
}
