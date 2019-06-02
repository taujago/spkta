<?php
class coremodel extends CI_Model {
        function __construct() {
                parent::__construct();
        }
     
var $semester = array(1=>"I","II","III","IV","V","VI","VII","VIII","IX");

function add_arr_head($arr,$index,$str) {
  $res[$index] = $str;
  foreach($arr as $x => $y) : 
  $res[$x] = $y;
  endforeach;
  return $res;
}

function arr_dropdown($vTable, $vINDEX, $vVALUE, $vORDERBY){
                $this->db->order_by($vORDERBY);
                $res  = $this->db->get($vTable);
                $ret = array();
                foreach($res->result_array() as $row) : 
                        $ret[$row[$vINDEX]] = $row[$vVALUE];
                endforeach;
                return $ret;

 }


 function arr_dropdown_prodi(){
    $this->db->order_by("kode");
    $res = $this->db->get("prodi");
    $arr = array();
    foreach($res->result() as $row) : 
        $arr[$row->id] = $row->kode." ".$row->prodi;
    endforeach;
    return $arr;
 }
 

 function arr_dropdown_mk(){
    $this->db->order_by("kode");
    $res = $this->db->get("gejala");
    $arr = array();
    foreach($res->result() as $row) : 
        $arr[$row->id] = $row->kode." ".$row->gejala;
    endforeach;
    return $arr;
 }

  function arr_dropdown_topik(){
    $this->db->order_by("kode");
    $res = $this->db->get("topik");
    $arr = array();
    foreach($res->result() as $row) : 
        $arr[$row->id] = $row->kode." - ".$row->topik;
    endforeach;
    return $arr;
 }

 function get_nilai($referensi_id){

    $this->db->where("referensi_id",$referensi_id);
    $this->db->order_by("matakuliah_id");
    $res = $this->db->get("referensi_detail");
    return $res;
 }

}
?>
