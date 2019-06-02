<div class="row justify-content-center">
	
	<div class="col-md-5 ">
		
		<form id="frmkriteria" method="post">
		<div class="form-group">
			<label for="passwordlama" class="form-control-label">Kata sandi lama :</label>
			<input type="password" name="passwordlama" class="form-control" id="passwordlama">
		</div>
		<div class="form-group">
			<label for="password" class="form-control-label">Kata sandi baru :</label>
			<input type="password"   name="password" class="form-control" id="password">

		</div>

		<div class="form-group">
			<label for="password2" class="form-control-label">Ulangi Kata sandi baru :</label>
			<input type="password"   name="password2" class="form-control" id="password2">

		</div>

		<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-location-arrow"></i> GANTI KATA SANDI</button>


							</form>

	</div>

</div>
<script type="text/javascript">
	
$(document).ready(function(){


	$("#frmkriteria").submit(function(){
		$.ajax({
			url : '<?php echo site_url("home/savegantipassword"); ?>',
			data : $(this).serialize(),
			type : 'post',
			dataType : 'json',
			success : function(obj){
				if(obj.error==false) {
					
					swal.fire('Info',obj.message,'success');

					
				}
				else {
					swal.fire('Error',obj.message,'error');

				}
			}
		});

		return false;
	});




});	

</script>