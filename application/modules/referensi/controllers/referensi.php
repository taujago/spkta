<?php
class referensi extends master_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("coremodel","cm");
		 
		$this->controller = get_class($this);

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();


		 
		 
		$content = $this->load->view($this->controller."_view",$data_array,true);



		 




		$this->set_title("DATA REFERENSI KASUS LAMA TUGAS AKHIR");
		$this->set_content($content);
		$this->render();
	}



function getdata($prodi_id){

	$this->db->order_by("id");
	$this->db->where("prodi_id",$prodi_id);
	$data['rec_mk'] = $this->db->get("matakuliah");


	$this->db->select('r.*, t.topik',false)
	->from('referensi r')
	->join('topik t','t.id = r.topik_id')
	->where("r.prodi_id",$prodi_id)
	 
	->order_by("r.no_urut");
	$data['rec_referensi'] = $this->db->get();



	$this->load->view("referensi_view_table",$data);



}




	function get_matakuliah($prodi_id){

		$this->db->where("prodi_id",$prodi_id); 
		$data['record'] = $this->db->get("matakuliah");
		$this->load->view("referensi_view_mk",$data);
	}






	function save(){


		$post = $this->input->post();
		// show_array($post); exit;

		$this->load->library('form_validation');
 		$this->form_validation->set_rules('nim','NIM','required');
 		$this->form_validation->set_rules('nama','Nama','required');
 		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 
 			unset($post['id']);

 			$arr_mk = $post['mk_id'];
 			unset($post['mk_id']);

 			$res = $this->db->insert("referensi",$post);



 			$referensi_id = $this->db->insert_id();
 			 

 			if($res){

 				foreach($arr_mk as $matakuliah_id => $nilai ) : 

 					$tmp['matakuliah_id'] = $matakuliah_id;
 					$tmp['nilai']  = $nilai;
 					$tmp['referensi_id'] = $referensi_id;
 					$this->db->insert("referensi_detail",$tmp);

 				endforeach;

 			 
 				



 				$ret = array("error"=>false,"message"=>"Data referensi kasus lama  berhasil disimpan");
 			}
 			else {
 				$ret = array("error"=>true,"message"=>"Data gagal disimpan".mysql_error());
 			}
 		}
 		else {
 			$ret = array("error"=>true,"message"=>validation_errors());
 		}

 		echo json_encode($ret);
	}
 

// function get_matakuliah($prodi_id){

// 		$this->db->where("prodi_id",$prodi_id); 
// 		$data['record'] = $this->db->get("matakuliah");
// 		$this->load->view("referensi_view_mk",$data);
// 	}


function get_json_detail($id){
	$this->db->where("id",$id);
	$data['detail'] = $this->db->get("referensi")->row_array();

	$this->db->where("referensi_id",$id);
	$rs = $this->db->get("referensi_detail");
	$arr_ref = array();
	foreach($rs->result() as $row): 
		$arr_ref[$row->matakuliah_id] = $row->nilai;
	endforeach;
	$x['arr_ref'] = $arr_ref;

	$this->db->where("prodi_id",$data['detail']['prodi_id']); 
	$this->db->order_by("id");
	$x['record'] = $this->db->get("matakuliah");
	$data['content'] = $this->load->view("referensi_view_mk_edit",$x,true);
	




	echo json_encode($data);

}


 function update(){


		$post = $this->input->post();
		// show_array($post); exit;

		$this->load->library('form_validation');
 		$this->form_validation->set_rules('nim','NIM','required');
 		$this->form_validation->set_rules('nama','Nama','required');
 		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 
 			// unset($post['id']);

 			$arr_mk = $post['mk_id'];
 			unset($post['mk_id']);

 			$this->db->where("id",$post['id']);

 			$res = $this->db->update("referensi",$post);



 		 
 			 

 			if($res){

 				$this->db->where("referensi_id",$post['id']);
 				$this->db->delete("referensi_detail");

 				foreach($arr_mk as $matakuliah_id => $nilai ) : 

 					$tmp['matakuliah_id'] = $matakuliah_id;
 					$tmp['nilai']  = $nilai;
 					$tmp['referensi_id'] = $post['id'];
 					$this->db->insert("referensi_detail",$tmp);

 				endforeach;

 			 
 				



 				$ret = array("error"=>false,"message"=>"Data referensi kasus lama  berhasil diupdate");
 			}
 			else {
 				$ret = array("error"=>true,"message"=>"Data gagal disimpan".mysql_error());
 			}
 		}
 		else {
 			$ret = array("error"=>true,"message"=>validation_errors());
 		}

 		echo json_encode($ret);
	}




function hapus($id) {

	$this->db->where("id",$id);
	$res = $this->db->delete("referensi");
	if($res){

	 

		$ret = array("error"=>false,"message"=>"Data topik berhasil dihapus");
	}
	else {
		$ret = array("error"=>true,"message"=>"Data gagal dihapus".mysql_error());

	}
	echo json_encode($ret);
}
 

}

?>
