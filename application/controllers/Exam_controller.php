<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function index()
	   {
	      // loads the index page in the exam Maps
	     $data = array();
	     $this->load->model("Exam_model");
	     $data['result'] = $this->Exam_model->getData();
	     $this->load->view("exam/index", $data);
	   }
}
