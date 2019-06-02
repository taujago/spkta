<?php

class excelmodel extends CI_Model {
	function __construct() {
		parent::__construct();
	}


function getdatalaporan($post) {

 
	extract($post); 

	$this->db->select("
			p.*, if(p.status=0,'DAFTAR',
				IF(p.status=2,'VER. LV2',IF(p.status=3,'VER. LV3','X'))) AS status2,
		,   
   IF((p.approved=0 and approved_error = 0 ), 'TUNGGU BLOKIR', 
   if((p.approved=0 and approved_error = 1),'TUNGGU BLOKIR',
   if((p.approved=0 and approved_error = 2),'BATAL BLOKIR (BPKB sudah diblokir)',
   if((p.approved=0 and approved_error = 3),'BATAL BLOKIR (KENDARAAN SUDAH JADI BPKB)',
   if((p.approved=0 and approved_error = 4),'BPKB SUDAH TERBIT DAN SUDAH TIDAK AKTIF',
   if((p.approved=0 and approved_error = 5),'USER TIDAK DITEMUKAN',
   
   IF(p.approved=1,'BLOKIR BPKB',IF(p.approved=2, 'CEK ABSAH POLISI, NOMOR RANGKA TIDAK DITEMUKAN', '-'))))) ) ) ) AS approved2,
			cab.cabang_nama",false);
		$this->db->where("p.leasing_id",$leasing_id);	

		if($id_polda <> 'x') { 
		$this->db->where("id_polda",$id_polda); }
		
		$this->db->where("jenis_permohonan",$jenis_permohonan);
		$this->db->from("t_pendaftaran p");
		$this->db->join("t_cabang cab",'p.cabang_id = cab.cabang_id','left');
		$this->db->order_by("daft_id desc");
		

		if($status <> '0') {

			 if($status==1) { // level 2 
			 	$this->db->where("status",2);
			 }
			 if ($status==2){ //
			 	$this->db->where("approved",0);
			 	$this->db->where("approved_error",0);			 	
			 }
			 if ($status==3){
			 	$this->db->where("approved",0);
			 	$this->db->where("approved_error <> 0 ",null,false);		
			 }
			 if($status==4){
			 	$this->db->where("approved",1);
			 }
		} 

		 
		if($bayar<>'x'){
			$this->db->where("bayar",$bayar);
		}

		if(!empty($no_rangka) ) {
			//$no_rangka = $param['no_rangka'];
			$this->db->where("(no_rangka = '$no_rangka' or no_bpkb='$no_rangka') ",null,false);
		}

		if( !empty($tanggal_awal) ) {

			$tanggal_awal = flipdate($tanggal_awal);
			$tanggal_akhir = flipdate($tanggal_akhir);
			$this->db->where("daft_date between '$tanggal_awal'  and '$tanggal_akhir'");
		}

		$this->db->order_by("cabang_id,daft_date"); 

		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
		return $res;



}



function get_list_daftar_print($param) {




$this->db->select("pol.*,
					p.`daft_id`, 
		`no_surat`,`no_urut_surat`,`jenis_permohonan`,p.`leasing_id`,`no_bpkb`,`nreg_bpkb`,`no_rangka`,`no_mesin`,`tgl_bpkb`,`no_polisi`,
		DATE_FORMAT(`tgl_bpkb`,'%d-%m-%Y') AS tgl_bpkb,
		`nama_pemilik`,`alamat_pemilik`,p.`merk_id`,


		IF((jenis_permohonan='B' and import='0'),m.merk_nama,p.`merk_nama`) AS merk_nama,
		`type_kendaraan`,p.`warna_id`,
		IF((jenis_permohonan='B' and import='0'),w.`warna_nama`,p.`warna_nama`) AS warna_nama,
		p.`jenis_id`, id_approval,
		IF((jenis_permohonan='B' and import='0'),j.`jenis_nama`,p.`jenis_nama`) AS jenis_nama,


		`tahun_kendaraan`,`user_id`,`status`,`approved`,`nama_pengajuan_leasing`,`alamat_pengajuan_leasing`,p.`id_polda`,`no_blokir`,
		DATE_FORMAT(`tgl_blokir`, '%d-%m-%Y')AS tgl_blokir ,
		DATE_FORMAT(`tgl_blokir2`, '%d-%m-%Y')AS tgl_blokir2 ,

		DATE_FORMAT(p.daft_date, '%d-%m-%Y') AS daft_date, DATE_FORMAT(p.verifikasi_date, '%d-%m-
		%Y') AS verifikasi_date, DATE_FORMAT(p.daft_level2_date, '%d-%m-%Y') AS daft_level2_date, DATE_FORMAT
		(p.daft_level3_date, '%d-%m-%Y') AS daft_level3_date, DATE_FORMAT(p.level2_tglsurat, '%d-%m-%Y') AS level2_tglsurat
		,l.leasing_nama, l.leasing_kota, l.leasing_alamat,
					if(p.status=0,'DAFTAR',
						IF(p.status=2,'VER. LV2',IF(p.status=3,'VER. LV3','X'))) AS status2
			 
		,IF((p.approved=0 and approved_error = 0 ), 'CEK ABSAH', 
		   if((p.approved=0 and approved_error = 1),'BATAL BLOKIR (NOMOR RANGKA SUDAH ADA)',
		   if((p.approved=0 and approved_error = 2),'BATAL BLOKIR (BPKB sudah diblokir)',
		   if((p.approved=0 and approved_error = 3),'BATAL BLOKIR (KENDARAAN SUDAH JADI BPKB)',
		   IF(p.approved=1, 'BLOKIR BPKB', 'CEK ABSAH'))))) AS approved2,
		cab.cabang_nama
		",false);
		$this->db->from("t_pendaftaran p");
		$this->db->where("l.leasing_id",$param['leasing_id']);
		$this->db->join("m_polda pol","pol.id_polda= p.id_polda")
		->join("m_warna w","w.warna_id=p.warna_id",'left')
		->join("m_jenis j","j.jenis_id=p.jenis_id",'left')
		->join("m_merk m","m.merk_id=p.merk_id",'left')
		->join("t_cabang cab","cab.cabang_id=p.cabang_id",'left')
		->join("m_leasing l","l.leasing_id=p.leasing_id",'left');






		if($param['id_polda'] <> 'x') { 
		$this->db->where("p.id_polda",$param['id_polda']); }





		 if($param['jenis_permohonan'] == "B") { 

				 
				 if ($param['status']==1){ //

				 	$this->db->where("approved",0);
				 	// $this->db->where("approved_error",0);	
				 	$this->db->where("status","3");		 	
				 }
				 
				 if($param['status']==2){
				 	$this->db->where("approved",1);
				 	$this->db->where("status","3");		
				 }


				 $this->db->where("jenis_permohonan","B");


			}
			else { // status kendaraaan lama 

				 
				 if ($param['status']==1){ //

				 	// $this->db->where("approved",0);
				 	// $this->db->where("approved_error",0);	
				 	$this->db->where("status",3);		 	
				 }
				 
				 if($param['status']==2){
				 	$this->db->where("status",3);	
				 	$this->db->where("approved",1);
				 }


				if($param['blokir_type']=='noneblokir') {

					$this->db->where("blokir_type","noneblokir");  

				} else {


					if($param['blokir_type']=='bbn') { 
						$this->db->where("blokir_type","bbn");  	
					}

					$this->db->where("jenis_permohonan","L");
				}
			
			}


			

/*
		if($param['blokir_type']=='bbn' or $param['blokir_type']=='noneblokir') {

			$this->db->where("blokir_type",$param['blokir_type']);
			
		}
		else {
			$this->db->where("(blokir_type = '' or blokir_type is null )",null,false);
		}

		*/




		if( !empty($param['tanggal_awal']) ) {

			$tanggal_awal = flipdate($param['tanggal_awal']);
			$tanggal_akhir = flipdate($param['tanggal_akhir']);

			// $this->db->where("daft_level3_date between '$tanggal_awal'  and '$tanggal_akhir'");
		
			$tgl_field = $param['parameter_tanggal'];

			$this->db->where("$tgl_field between '$tanggal_awal'  and '$tanggal_akhir'");
		}


		// $this->db->where("cek_absah",$param['cekabsah']);
		
		if($param['cekabsah'] <> 'x'){
			$this->db->where("cek_absah",$param['cekabsah']);
		}

		// ($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       // ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();

		// show_array($param);
		// echo $this->db->last_query(); exit;
 		return $res;



		
/*
		if( $param['id_polda'] <> 'x'  ) {
			 
			$this->db->where("p.id_polda",$param['id_polda'] );
		}
		 
		if( $param['jenis_permohonan'] <> 'x'  ) {
			 
			$this->db->where("jenis_permohonan",$param['jenis_permohonan'] );
		}

		if( !empty($param['tanggal_awal']) ) {

			$tanggal_awal = flipdate($param['tanggal_awal']);
			$tanggal_akhir = flipdate($param['tanggal_akhir']);
			$this->db->where("daft_date between '$tanggal_awal'  and '$tanggal_akhir'");
		}


		 if($param['jenis_permohonan'] == "B") { 

				 
				 if ($param['status']==1){ //

				 	$this->db->where("approved",0);
				 	// $this->db->where("approved_error",0);	
				 	$this->db->where("status","3");		 	
				 }
				 
				 if($param['status']==2){
				 	$this->db->where("approved",1);
				 	$this->db->where("status","3");		
				 }
			}
			else { // status kendaraaan lama 

				 
				 if ($param['status']==1){ //

				 	// $this->db->where("approved",0);
				 	// $this->db->where("approved_error",0);	
				 	$this->db->where("status",3);		 	
				 }
				 
				 if($param['status']==2){
				 	$this->db->where("status",3);	
				 	$this->db->where("approved",1);
				 }


			}
 



		if($param['blokir_type']=='bbn' or $param['blokir_type']=='noneblokir') {

		$this->db->where("blokir_type",$param['blokir_type']);
			
		}
		else {
			$this->db->where("(blokir_type = '' or blokir_type is null )",null,false);
		}



		// if($param['branch_type']=="cabang") {
		// 	$this->db->where("p.cabang_id",$param['cabang_id']);
		// }


		$this->db->from("t_pendaftaran p");



		$this->db->order_by("daft_date","desc");
		$res = $this->db->get();
	  // echo $this->db->last_query(); exit;
		
		 
		return $res; */ 
	}	


function update_data_pendaftaran($param,$email_id) {
		$this->db->where("leasing_id",$param['leasing_id']);

		if( $param['id_polda'] <> 'x'  ) {
			 
			$this->db->where("id_polda",$param['id_polda'] );
		}
		 
		if( $param['jenis_permohonan'] <> 'x'  ) {
			 
			$this->db->where("jenis_permohonan",$param['jenis_permohonan'] );
		}

		if( !empty($param['tanggal_awal']) ) {

			$tanggal_awal = flipdate($param['tanggal_awal']);
			$tanggal_akhir = flipdate($param['tanggal_akhir']);
			$this->db->where("daft_date between '$tanggal_awal'  and '$tanggal_akhir'");
		}


		 if($param['jenis_permohonan'] == "B") { 

				 
				 if ($param['status']==1){ //

				 	$this->db->where("approved",0);
				 	$this->db->where("approved_error",0);			 	
				 }
				 
				 if($param['status']==2){
				 	$this->db->where("approved",1);
				 }
			}
			else { // status kendaraaan lama 

				 
				 if ($param['status']==1){ //

				 	// $this->db->where("approved",0);
				 	// $this->db->where("approved_error",0);	
				 	$this->db->where("status",3);		 	
				 }
				 
				 if($param['status']==2){
				 	$this->db->where("status",3);	
				 	$this->db->where("approved",1);
				 }


			}

		if($param['blokir_type']=='bbn' or $param['blokir_type']=='noneblokir') {

		$this->db->where("blokir_type",$param['blokir_type']);
			
		}
		else {
			$this->db->where("(blokir_type = '' or blokir_type is null )",null,false);
		}

		$this->db->update("t_pendaftaran",array("email_id"=>$email_id));


}

}

?>