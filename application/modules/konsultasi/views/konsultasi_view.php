<form method="post" id="frmkonsultasi" action="<?php echo site_url("$this->controller/save"); ?>">
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