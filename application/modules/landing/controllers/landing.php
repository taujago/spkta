<?php
class landing extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['rec_penyakit'] = $this->db->get("penyakit");
		$this->load->view("landing_view",$data);
	}
}
?>