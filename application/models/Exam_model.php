<?php
class Exam_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function get_exam() {
    $this->db->select('calendar.*');
<<<<<<< HEAD
    $this->db->select('exam.*');
    $this->db->select('exam_template.title');
=======
    $this->db->select('q_exam.title');
>>>>>>> pdf
    $this->db->select('student.first_name, student.last_name, student.ov_number');
    $this->db->from('calendar');
    $this->db->join('exam', 'exam.id = exam_id');
    $this->db->join('student', 'student.id = student_id');
<<<<<<< HEAD
    $this->db->join('exam_template', 'exam_template.id = exam_template_id');
    $this->db->where('exam.id', $this->uri->segment(3));
=======
    $this->db->join('result', 'result.id = result_id');
    $this->db->join('q_exam', 'q_exam.id = q_exam_id');
>>>>>>> pdf
    $query = $this->db->get();
    $row = $query->row_array();
    //return $this->db->last_query();
    return $row;
  }

  public function get_exam_questions() {
    $this->db->select('questions.question_title, questions.possible_score');
    $this->db->select('subtitle.title');
<<<<<<< HEAD
    $this->db->select('answers.answer');

    $this->db->from('exam');

    $this->db->join('exam_template', 'exam.exam_template_id = exam_template.id');
    $this->db->join('subtitle', 'subtitle.exam_template_id = exam_template.id');
    $this->db->join('questions', 'questions.subtitle_id = subtitle.id');
    $this->db->join('answers', 'answers.question_id = questions.id AND answers.exam_id = exam.id', 'LEFT');

    $this->db->where('exam.id', $this->uri->segment(3));

=======
    $this->db->from('questions');
    $this->db->join('subtitle', 'questions.subtitle_id = subtitle.id', 'right');
    $this->db->join('q_exam', 'subtitle.q_exam_id = q_exam.id');
>>>>>>> pdf
    $this->db->order_by('title asc');
    $this->db->order_by('question_title asc');

    $query = $this->db->get();

    //return $this->db->last_query();
    return $query->result_array();

  }
<<<<<<< HEAD

  public function save_exam()
  {
    if ($this->input->post('submit') == 'true') {
      echo 'hallo';
      $this->db->where('id', $this->uri->segment(3));
      $this->db->update('exam', array('submit' => $this->input->post('submit')));
    }

    foreach ($_POST as $key => $value) {
      $data = array(
        'exam_id' => $this->uri->segment(3),
        'question_id' => $key,
        'answer' => (bool)$value);

      $this->db->select('*');
      $this->db->from('answers');
      $this->db->where('answers.exam_id', $this->uri->segment(3));
      $this->db->where('answers.question_id', $key);
      $query = $this->db->get();
      if ($key != 'submit') {
        if ($query->num_rows() > 0) {
          $this->db->where('exam_id', $this->uri->segment(3));
          $this->db->where('question_id', $key);
          $this->db->update('answers', $data);
        } else {
          $this->db->insert('answers', $data);
        }
      }
    }
  }

  public function get_calendar_id_by_exam_id ($id)
  {
    $this->db->select('calendar.id');
    $this->db->from('exam');
    $this->db->join('calendar', 'exam.id = calendar.exam_id');
    $this->db->where('exam.id ', $id);
    $query = $this->db->get();
    $row = $query->row_array();
    return $row['id'];
  }
};
=======
}
>>>>>>> pdf
