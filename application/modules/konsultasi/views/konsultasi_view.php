<form method="post" id="frmkonsultasi" action="<?php echo site_url("$this->controller/save"); ?>">

<?php if($_SESSION['userdata'][0]['level'] == 0 ) { 
 ?> 

<div class="row">
	

	<?php 
foreach($record->result() as $row): 

$arr_nilai = array("A"=>"A","B"=>"B","C"=>"C" );


?>
<div class="col-md-6">
	<div class="form-group">
		<label><?php echo $row->kode." - ".$row->matakuliah ?></label>
		<?php 

				echo form_dropdown("mk_id[$row->id]",$arr_nilai,'','class="form-control"');
		?>

	</div>
</div>
<?php 
endforeach;
?>

</div>
<?php } 
else { 
?>



 <div class="row">
	<div class="col-md-10">
		<div class="form-group">
			<label>Pilih Program Studi </label>
			<?php 
			$arr = $this->cm->arr_dropdown_prodi();
				echo form_dropdown("v_program_studi",$arr,'','class="form-control" id="v_program_studi"');
			?>
		</div>
	</div>
	<div class="col-md-2 pt-lg-5">
		<div class="form-group">
			<label> &nbsp; </label>
			 <button href="#!" id="btnlist" class="btn btn-primary"><i class="fa fa-eye"></i>TAMPILKAN </button>
		</div>
	</div>



</div> 
<?php  } ?>

<hr />
<div class="row" id="listdata">
	 
</div>
<button type="submit" class="btn btn-primary "><i class="fa fa-location-arrow"></i> PROSES  </button>
</form>

 <script type="text/javascript">
 $(document).ready(function(){
		$("#btnlist").click(function(){
	 
	 
 	
 	  $.ajax({
 	  	url : '<?php  echo site_url("referensi/get_matakuliah");?>/'+$("#v_program_studi").val(),
 	  	success : function(htmldata) {
 	  		$("#listdata").html(htmldata);
 	  	}
 	  });
 
 	  return false;


	});
 });

 </script>