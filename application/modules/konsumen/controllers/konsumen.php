<?php
class konsumen extends master_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("coremodel","cm");
		 
		$this->controller = get_class($this);

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();


		$this->db->select('*')->
		from('pengguna')->where('level','0');




		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
		$data_array['record'] = $res; 

		 
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_title("DATA PASIEN");
		$this->set_content($content);
		$this->render();
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

	function save(){
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



function update(){
		$post = $this->input->post();

		$this->load->library('form_validation');

		 
		if($post['password']<> '' || $post['password2'] <> '' ) { 
		$this->form_validation->set_rules('password', 'Kata sandi', 'callback_cekpass');

			unset($post['password2']);

			$post['password'] = md5($post['password']);

		} else {
			unset($post['password']);
			unset($post['password2']);
		}
		 
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_message('required', '%s Harus diisi');


		if ($this->form_validation->run() == TRUE)
		{
			// echo "test";
			


			

			$this->db->where("id",$post['id']);
			$res = $this->db->update("pengguna",$post);
			if($res){
				$ret  = array(
				"error"=>false,
				"message"=>"Data konsumen berhasil diupdate" );

			}
			else {
				$ret  = array(
				"error"=>true,
				"message"=>"data konsumen gagal diupdate ".mysql_error() );
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




function hapus($id) {

	$this->db->where("id",$id);
	$res = $this->db->delete("alternatif");
	if($res){
		$ret = array("error"=>false,"message"=>"Data harga berhasil dihapus");
	}
	else {
		$ret = array("error"=>true,"message"=>"Data gagal dihapus".mysql_error());

	}
	echo json_encode($ret);
}

}

?>
