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
		$this->load->model('CourseDB');
		$course_data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
			);
		$this->CourseDB->add_course($course_data);
		redirect('/');
	}
	public function remove($id)
	{
		$this->load->model('CourseDB');
		$specific_course = $this->CourseDB->get_specific_course($id);
		$this->load->view('delete_course', $specific_course);
	}
	public function delete($id)
	{
		$this->load->model('CourseDB');
		$this->CourseDB->delete_course($id);
		redirect('/');
	}
}