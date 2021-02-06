<?php
class data_berkas extends CI_controller{
	public function index()
	{
		
		$this->load ->view('templete_admin/header');
		$this->load ->view('templete_admin/sidebar');
		$this->load ->view('admin/data_berkas');
		$this->load ->view('templete_admin/fluter');
	}
}
?>