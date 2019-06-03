<?php 
class mhs_model extends CI_Model {
	function __construct(){
		parent::__construct();

	}


	function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $this->db->select('m.*,p.prodi')
		 ->from('mahasiswa m')
		 ->join('prodi p','p.id = m.prodi_id','left');
		  
		 if($prodi_id <> '') {
		 	$this->db->where("m.prodi_id",$prodi_id);
		 }

		 if($nama<>''){
		 	$this->db->where("(m.nama like '%$nama%' or m.nim like '%$nama%' ) ",null,false);
		 }


		 $this->db->where("level",0);
		  

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		   
       // ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//  echo $this->db->last_query(); exit;
 		return $res;
	}

 

}
?>