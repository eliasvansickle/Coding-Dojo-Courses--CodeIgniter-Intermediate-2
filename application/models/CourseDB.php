<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourseDB extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		////Load view file here////
		// $this->load->view('add_course');
	}
	public function add_course($course)
	{
		return $this->db->query("INSERT INTO courses (name, description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())", 
			array($course['name'], $course['description']));
	}
	public function get_all_courses()
	{
		return $this->db->query("SELECT name, description, created_at FROM courses ORDER BY courses.id DESC")->result_array();
	}
	public function delete_course()
	{
		// return $this->db->query("DELETE * FROM courses WHERE ")
	}
}