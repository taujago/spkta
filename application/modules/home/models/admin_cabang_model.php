<?php
class admin_cabang_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}




function arr_leasing(){

	$arr = array("x"=>"== PILIH LEASING ==");
	$userdata = $this->session->userdata("userdata");
	$this->db->select('l.*')->from("m_leasing l")
	->join("polda_leasing p",'p.leasing_id=l.leasing_id');
	$this->db->order_by("leasing_nama");
	//$this->db->where("p.id_polda",$userdata['id_polda']);
	$res = $this->db->get();
	// echo $this->db->last_query(); exit;
	foreach($res->result() as $row) : 
		$arr[$row->leasing_id] = $row->leasing_nama;
	endforeach;
	//show_array($arr);
	return $arr;
}

 var $arr_jenis_permohonan = array("B"=>"KENDARAAN BARU","L"=>"KENDARAAN LAMA");


 function data($param)
	{		

	 

		// show_array($param);
		 extract($param);
		 
	  
	  	$this->db->select("c.*, l.leasing_nama")
	  	->from("t_cabang c")
	  	->join("m_leasing l",'c.leasing_id=l.leasing_id');

	  	if($leasing_id<>'x') {
	  		$this->db->where("l.leasing_id",$leasing_id);
	  	}

		 
	 
	 

		// if( !empty($tanggal_awal) ) {

		// 	$tanggal_awal = flipdate($tanggal_awal);
		// 	$tanggal_akhir = flipdate($tanggal_akhir);
		// 	$this->db->where("daft_date between '$tanggal_awal'  and '$tanggal_akhir'");
		// }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       // ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}

 
}
?>
