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
		$("#judul").html('TAMBAH DATA PASIEN ');
		$("#formModal").modal('show');
		v_url = '<?php echo site_url("$this->controller/save") ?>';
	}



function edit(id,username,nama,hp,alamat,umur,jk){
	$("#judul").html('EDIT DATA PASIEN ');


	
	v_url = '<?php echo site_url("$this->controller/update") ?>';

	$("#id").val(id);
	$("#password").val('');
	$("#password2").val('');
	$("#username").val(username);
	$("#nama").val(nama);
	$("#hp").val(hp);
	$("#alamat").val(alamat);
	$("#umur").val(umur);
	$("#jk").val(jk).attr('selected','selected');





	 
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