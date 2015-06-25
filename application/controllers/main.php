<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		////Load view file here////
		$this->load->model('CourseDB');
		$view_courses = $this->CourseDB->get_all_courses();
		$this->load->view('add_course', array(
			'course' => $view_courses));
	}
	public function add()
	{
		$this->session->sess_destroy;
		$this->load->model('CourseDB');
		$course_data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
			);
		$this->CourseDB->add_course($course_data);
		redirect('/');
	}
	public function delete()
	{
		// die('here');
		// $this->load->model('CourseDB');
		// $delete_selection = $this->CourseDB->delete_course();
		// $this->load->view('delete_course', array(
		// 	'del' => $delete_selection
		// 	));

	}
}