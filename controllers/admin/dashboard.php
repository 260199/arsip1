<?php

class Dashboard extends CI_Controller{

	public function index()
	{
		$this->load -> view ('templete_admin/header');
		$this->load -> view ('templete_admin/sidebar');
		$this->load -> view ('admin/dashboard');

		$this->load -> view ('templete_admin/fluter');
		
	
	}
}
?>