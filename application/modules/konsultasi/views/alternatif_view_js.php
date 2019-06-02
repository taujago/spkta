<script type="text/javascript">
var v_url = '';
$(document).ready(function(){

// $("#tabel").dataTable(); 

	$("#btnsimpan").click(function(){
		$.ajax({
			url : v_url,
			data : $("#frmkriteria").serialize(),
			dataType : 'json',
			type : 'post',
			success : function(obj){

				if(obj.error==false) {
					$("#formModal").modal('hide');
					// swal.fire('Info',obj.message,'success');

					swal.fire({title: "Info", text: obj.message , type: "success"}).then(function(){

						location.reload();

					});
					
					// 
				}
				else {
					swal.fire('Errr',obj.message,'danger');
				}


			}
		});
	});





});


	function tambahbaru(){
		$("#judul").html('TAMBAH DATA ALTERNATIF HANDPHONE ');
		$("#formModal").modal('show');
		v_url = '<?php echo site_url("$this->controller/save") ?>';
	}



function edit(id,merk,c1,c2,c3,c4,c5,c6){
	$("#judul").html('EDIT DATA ALTERNATIF HANDPHONE ');
	
	v_url = '<?php echo site_url("$this->controller/update") ?>';

	$("#id").val(id);
	$("#merk").val(merk);
	$("#c1").val(c1);
	$("#c2").val(c2);
	$("#c3").val(c3);
	$("#c4").val(c4);
	$("#c5").val(c5);
	$("#c6").val(c6);
	 
	$("#formModal").modal('show');
}


function hapus(id) {

Swal.fire({
  title: 'Apakah anda yakin ?',
  text: "Anda akan menghapus data!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Lanjutkan'
}).then((result) => {
  if (result.value) {
     
  		$.ajax({
  			url : '<?php echo site_url("$this->controller/hapus") ?>/'+id,
  			dataType : 'json',
  			success : function(obj) {
  				if(obj.error==false) {
  					
					swal.fire({title: "Info", text: obj.message , type: "success"}).then(function(){

						location.reload();

					});
					 
				}
				else {
					swal.fire('Errr',obj.message,'danger');
				}
  			}
  		});


  }
})



}



</script>