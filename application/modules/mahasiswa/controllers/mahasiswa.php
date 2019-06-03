<?php
class mahasiswa extends master_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("coremodel","cm");
		$this->load->model("mhs_model","dm");
		 
		$this->controller = get_class($this);

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();


		$this->db->select('*')->from('prodi');
		$res = $this->db->get();
		$data_array['record'] = $res; 
		 
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_title("DATA MAHASISWA");
		$this->set_content($content);
		$this->render();
	}


function get_data(){

$draw = $_REQUEST['draw']; // get the requested page 
$start = $_REQUEST['start'];
$limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
$sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:"daft_id"; // get index row - i.e. user click to sort 
$sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // 
$prodi_id = $_REQUEST['columns'][1]['search']['value'];
$nama = $_REQUEST['columns'][2]['search']['value'];
// get the direction if(!$sidx) $sidx =1;  

 $req_param = array (
		"sort_by" => $sidx,
		"sort_direction" => $sord,
		"limit" => null,
		"prodi_id" =>$prodi_id,
		"nama" => $nama
		 
);     
   
$row = $this->dm->data($req_param)->result_array();

$count = count($row); 


$req_param['limit'] = array(
            'start' => $start,
            'end' => $limit
);
  

$result = $this->dm->data($req_param)->result_array();

$arr_data = array();
$no = 0; 
$semester = $this->cm->semester;
foreach($result as $row) : 
	$no++;
	$id = $row['id'];
	$arr_data[] = array(

// <th width="5%">NO </th>
// 				<th width="5%">NIM </th> 
// 				<th width="10%">NAMA</th>
 // 			<th width="10%">EMAIL </th>
// 				<th width="10%">PRODI </th> 
// 				<th width="10%">PROSES</th>



		$no, 
		$row['nim'],
		$row['nama'],	 
		$row['email'],
		$row['prodi'],
		'<a href="#!"  onclick="edit(\''.$id. '\');"  class="btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
		<a href="#!" onclick="hapus(\''.$id. '\');"  class="btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>'


	);
endforeach;

 $responce = array('draw' => $draw, // ($start==0)?1:$start,
        				  'recordsTotal' => $count, 
        				  'recordsFiltered' => $count,
        				  'data'=>$arr_data
        	);
         
        echo json_encode($responce); 

}



	function save(){


		$post = $this->input->post();
		// show_array($post); exit;

		$this->load->library('form_validation');
 		$this->form_validation->set_rules('nim','NIM','required');
 		$this->form_validation->set_rules('nama','Nama','required');
 		$this->form_validation->set_rules('email','Email','required');
 		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 
 			unset($post['id']);
 
 			$post['password'] = md5($post['password']);
 			$post['level'] =0 ;

 			$res = $this->db->insert("mahasiswa",$post);
 			 

 			if($res){

 			 
 

 				$ret = array("error"=>false,"message"=>"Data mahasiswa berhasil disimpan");
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
 


function get_json_detail($id){
	$this->db->where("id",$id);
	$data = $this->db->get("mahasiswa")->row_array();
	// echo $this->db->last_query();
	echo json_encode($data);
}


 function update(){


		$post = $this->input->post();
		// show_array($post); exit;

		$this->load->library('form_validation');
 		$this->form_validation->set_rules('nim','NIM','required');
 		$this->form_validation->set_rules('nama','Nama','required');
 		$this->form_validation->set_rules('email','Email','required');
 		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 
 			// unset($post['id']);
 
 			// $post['password'] = md5($post['password']);
 			$this->db->where("id",$post['id']);
 			$post['password'] = (empty($post['password']))?NULL:md5($post['password']);

 			$res = $this->db->update("mahasiswa",$post);
 			 

 			if($res){

 			 
 

 				$ret = array("error"=>false,"message"=>"Data mahasiswa berhasil diupdate");
 			}
 			else {
 				$ret = array("error"=>true,"message"=>"Data gagal diupdate".mysql_error());
 			}
 		}
 		else {
 			$ret = array("error"=>true,"message"=>validation_errors());
 		}

 		echo json_encode($ret);
	}




function hapus($id) {

	$this->db->where("id",$id);
	$res = $this->db->delete("mahasiswa");
	if($res){

		 

		$ret = array("error"=>false,"message"=>"Data mahasiswa berhasil dihapus");
	}
	else {
		$ret = array("error"=>true,"message"=>"Data gagal dihapus".mysql_error());

	}
	echo json_encode($ret);
}
 

}

?>
