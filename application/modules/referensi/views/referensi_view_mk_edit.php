<?php 
foreach($record->result() as $row): 

$arr_nilai = array("A"=>"A","B"=>"B","C"=>"C" );

$nilai = array_key_exists($row->id,$arr_ref)?$arr_ref[$row->id]:"";

?>
<div class="col-md-6">
	<div class="form-group">
		<label><?php echo $row->kode." - ".$row->matakuliah ?></label>
		<?php 

				echo form_dropdown("mk_id[$row->id]",$arr_nilai,$nilai,'class="form-control"');
		?>

	</div>
</div>
<?php 
endforeach;
?>