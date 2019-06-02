<?php 
class login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}


	function index(){

		$this->load->view("login_view");
	}

	function ceklogin(){
		$post = $this->input->post();

		$this->db->where("username",$post['username']);
		$this->db->where("password",md5($post['password']));
		$res = $this->db->get("pengguna");
		if($res->num_rows() > 0 ) {
			$_SESSION['userdata'] = $res->result_array();
			$_SESSION['login'] = true;
			// $this->session->set_userdata('login',true);
			$ret = array("error"=>false,"message"=>"Login berhasil");
		}
		else {
			$ret = array("error"=>true,"message"=>"Login gagal. Username tidak dikenali");
		}

		echo json_encode($ret);

	}

	function logout(){
		unset($_SESSION['login']);
		redirect("/");
	}

	function daftar(){
		$this->load->view("register_view");
	}


	function cekpass($password){

		 

		$password2 = $_POST['password2'];

		if($password == '' || $password2 ==""){
			$this->form_validation->set_message('cekpass', '%s tidak boleh kosong');

			return false;
		}
		if($password <> $password2) {
			// echo "kenapa tidak sama";
			$this->form_validation->set_message('cekpass', '%s tidak sama');

			return false;
		}


	}

	function cekuser($username) {
		$this->db->where("username",$username);
		$res  = $this->db->get("pengguna");
		if($res->num_rows() > 0 ) {
			$this->form_validation->set_message('cekuser', '%s sudah terdaftar');
			return false;
		}
	}

	function savedaftar(){
		$post = $this->input->post();

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Nama pengguna', 'callback_cekuser');
		$this->form_validation->set_rules('password', 'Kata sandi', 'callback_cekpass');
		 
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_message('required', '%s Harus diisi');


		if ($this->form_validation->run() == TRUE)
		{
			// echo "test";
			 
			unset($post['password2']);

			$post['password'] = md5($post['password']);

			$post['level'] = 0;
			$res = $this->db->insert("pengguna",$post);
			if($res){
				$ret  = array(
				"error"=>false,
				"message"=>"Pendaftaran berhasil" );

			}
			else {
				$ret  = array(
				"error"=>true,
				"message"=>"Pendaftaran gagal".mysql_error() );
			}


		}
		else
		{
			$ret  = array(
				"error"=>true,
				"message"=>validation_errors()
			);
		}
		echo json_encode($ret);
	}
}
?>