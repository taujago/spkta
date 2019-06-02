<?php
class home extends master_controller {
	function __construct(){
		parent::__construct();
		// $this->load->model("core_model","cm");
		 
		$this->controller = get_class($this);

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();
		 
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_title("DASHBOARD - SISTEM PENDUKUNG KEPUTUSAN REKOMENDASI TUGAS AKHIR");
		$this->set_content($content);
		$this->render();
	}

	
	function gantipassword(){
		$data_array = array();
		 
		$content = $this->load->view("gantipass_view",$data_array,true);

		$this->set_title("GANTI PASSWORD");
		$this->set_content($content);
		$this->render();
	}


	function cekpasslama($passwordlama){
		// echo "ajjjgagg";
		$id = $_SESSION['userdata'][0]['id'];
		$this->db->where("id",$id);
		$this->db->where("password",md5($passwordlama));
		$jumlah = $this->db->get("pengguna")->num_rows();
				// echo $this->db->last_query();

		if($jumlah <> 1  ) {
			$this->form_validation->set_message('cekpasslama', '%s yang sekarang salah');
			return false;
		}
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



	function savegantipassword(){
		$post = $this->input->post();
		$this->load->library('form_validation');

		$this->form_validation->set_rules('passwordlama', 'Kata sandi', 'callback_cekpasslama');
		$this->form_validation->set_rules('password', 'Kata sandi', 'callback_cekpass');

// 		password
// password2
		 
		// $this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_message('required', '%s Harus diisi');


		if ($this->form_validation->run() == TRUE)
		{

			$this->db->where("id",$_SESSION['userdata'][0]['id']);
			$res = $this->db->update("pengguna",array("password"=>md5($post['password'])));
			if($res){
				$ret  = array(
				"error"=>false,
				"message"=>"Kata sandi berhasil diganti" );

			}
			else {
				$ret  = array(
				"error"=>true,
				"message"=>"Kata sandi gagal diganti".mysql_error() );
			}

		}
		else {
			$ret  = array(
				"error"=>true,
				"message"=>validation_errors()
			);
		}

		echo json_encode($ret);

	}
 

 

}

?>
