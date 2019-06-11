<?php
class konsultasi extends master_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("coremodel","cm");
		 
		$this->controller = get_class($this);

    $this->method = null; 

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();



    if($_SESSION['userdata'][0]['level'] == 0 ) { 
    $this->db->where("id",$_SESSION['userdata'][0]['prodi_id']);
    $dprodi = $this->db->get("prodi")->row();

    $data_array['prodi'] = $dprodi->kode." - ".$dprodi->prodi;
    $this->set_title("KONSULTASI  PEMILIHAN TOPIK TUGAS AKHIR PROGRAM STUDI  ". $data_array['prodi']);
		 
    }
    else {
       $this->set_title("KONSULTASI  PEMILIHAN TOPIK TUGAS AKHIR PROGRAM STUDI  ");
    }

    $this->db->where("prodi_id",$_SESSION['userdata'][0]['prodi_id']);
    $data_array['record'] = $this->db->get("matakuliah");


		 
		 
		$content = $this->load->view($this->controller."_view",$data_array,true);

		


		$this->set_content($content);
		$this->render();
	}


function save(){
  $post = $this->input->post();
  // show_array($post);

  $tmp['tanggal'] = date("Y-m-d");
  $tmp['user_id'] = $_SESSION['userdata'][0]['id'];
  $tmp['prodi_id'] = ($_SESSION['userdata'][0]['level'] == 0)?$_SESSION['userdata'][0]['prodi_id']:$post['v_program_studi'];

  $this->db->insert("konsultasi",$tmp);
  $konsultasi_id = $this->db->insert_id();

  foreach($post['mk_id'] as $matakuliah_id => $nilai): 
    $xtmp['konsultasi_id'] = $konsultasi_id;
    $xtmp['matakuliah_id'] = $matakuliah_id;
    $xtmp['nilai']         = $nilai;
    $this->db->insert("konsultasi_detail",$xtmp);

  endforeach;

  redirect("$this->controller/review/$konsultasi_id"); 
}

 

function review($id){
// buat nilai angka dari nilai huurf 
$arr_nilai = array("A"=>1,"B"=>2,"C"=>3);

// mabil detail data konsultasi yang sudah disimpan
$this->db->select('k.*, u.nama,u.jk')
->from('konsultasi k')
->join('mahasiswa u','u.id = k.user_id');
$this->db->where("k.id",$id); 
$data = $this->db->get()->row_array();


// buatkan array input 
$this->db->where("konsultasi_id",$id);
$rs = $this->db->get("konsultasi_detail");

$arr_input = array();
foreach($rs->result() as $row) : 
  $arr_input[$row->matakuliah_id] = $arr_nilai[$row->nilai];
endforeach;




$this->db->select('r.*, t.id as topik_id, t.kode as kd_topik, t.topik, t.keterangan as keterangan_topik')
->from("referensi r")
->join("topik t","t.id = r.topik_id");
$this->db->where("prodi_id",$data['prodi_id']);
$res = $this->db->get();
$arr_ref = array();
$arr_hasil = array();
foreach($res->result() as $row): 
  $arr_ref[$row->id] = array(
      "no_urut" => $row->no_urut,
      "nim"     => $row->nim,
      "nama"    => $row->nama, 
      "prodi_id"=> $row->prodi_id,
      "topik"   => $row->topik,
      "kd_topik"=> $row->kd_topik,
      "keterangan_topik" => $row->keterangan_topik

  );

  $this->db->order_by("id");
  $this->db->where("referensi_id",$row->id);
  $rd = $this->db->get("referensi_detail");
  //echo $this->db->last_query(); exit;
  $arr_ref[$row->id]['jumlah'] = 0; 
  foreach($rd->result() as $rwd):
    $mk_id = $rwd->matakuliah_id;
    $arr_ref[$row->id]['nilai'][$mk_id] = $arr_nilai[$rwd->nilai];
    $arr_ref[$row->id]['skor'][$mk_id] = 
      abs( $arr_input[$mk_id] -  $arr_nilai[$rwd->nilai] ) ; 
    $arr_ref[$row->id]['jumlah'] +=  $arr_ref[$row->id]['skor'][$mk_id] ; 
  endforeach;

  $arr_hasil[$row->id] = $arr_ref[$row->id]['jumlah'];
endforeach;

arsort($arr_hasil);

foreach($arr_hasil as $id_ref => $bobot) : 
  $arrx['skor'] = $bobot;
  $arrx['topik_id'] = $arr_ref[$id_ref]['kd_topik'];
  $this->db->where("id",$id);
  $this->db->update("konsultasi",$arrx);
  $break; 
endforeach;



// show_array($data);
// show_array($arr_input);
// show_array($arr_ref);
// show_array($arr_hasil);
// exit; 
$data_array['data'] = $data;
$data_array['arr_input'] = $arr_input;
$data_array['arr_ref'] = $arr_ref;
$data_array['arr_hasil'] = $arr_hasil;
$data_array['rs'] = $rs;
$data_array['arr_nilai'] = $arr_nilai;

$data_array['konsultasi_id'] = $id; 

$content = $this->load->view($this->controller."_view_result",$data_array,true);

$this->set_title("HASIL DIAGNOSA");
$this->set_content($content);
$this->render();


}

// function list(){
// 	echo "flow";
// }
function listview(){

$this->method="listview";


$data_array = array();

$this->db->select('k.*, t.kode as topik_kode, t.topik, t.keterangan, u.nim, u.nama ')
->from('konsultasi k')
->join('mahasiswa u','k.user_id = u.id')
->join('topik t','t.id = k.topik_id','left');
$this->db->order_by("tanggal","desc");

if($_SESSION['userdata'][0]['level'] == 0 ) {
	$this->db->where("u.id",$_SESSION['userdata'][0]['id']);
}

$data_array['record'] = $this->db->get();
// echo $this->db->last_query(); exit;



$content = $this->load->view($this->controller."_list_view",$data_array,true);

$this->set_title("DATA REKOMENDASI TUGAS AKHIR");
$this->set_content($content);
$this->render();

}
 

function laporan(){

  $this->method = "laporan";

$sql = " select * from ( 
SELECT p.*, 
       count(pm.id) as jumlah , 
      sum( if(u.jk='L',1,0)) as L,
      sum( if(u.jk='P',1,0)) as P     
  
    FROM penyakit p 
left join pemeriksaan pm on p.id = pm.penyakit_id
left join mahasiswa u on u.id = pm.user_id 
  group by p.id 
  ) x 
  order by x.jumlah desc
";

$data_array['record'] = $this->db->query($sql);

$content = $this->load->view($this->controller."_laporan_view",$data_array,true);

$this->set_title("LAPORAN REKAPITULASI HASIL PEMERIKSAAN");
$this->set_content($content);
$this->render();


}



}

?>
