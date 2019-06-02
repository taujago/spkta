<?php
class master_controller extends CI_Controller {

	function __construct() {
		parent::__construct();  

		if($_SESSION['login'] == false ) {
			redirect('login/');
		} 
		
		 
		
	}

	function set_content($str) {
		$this->content['content'] = $str;
	}
	
	function set_title($str) {
		$this->content['title'] = $str;
	}
	
	function set_subtitle($str) {
		$this->content['subtitle'] = $str;
	}
	
	function render(){
		$arr = array();		 
		$this->load->view("template3",$this->content );
		
	}

 

function add_arr_head($arr,$index,$value) {

	$ret[$index] = $value;

	foreach($arr as $x => $y):
		$ret[$x] = $y;
	endforeach;

	return $ret;

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

 



}

?>
