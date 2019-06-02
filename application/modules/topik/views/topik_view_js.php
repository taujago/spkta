<script type="text/javascript">
var v_url = '';
$(document).ready(function(){

$("#tabel").dataTable(); 

$("#id_penyakit").select2();

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
		$("#judul").html('TAMBAH DATA TOPIK TUGAS AKHIR ');
		$("#formModal").modal('show');
		$("#kode").val('');
		$("#gejala").val('');
		v_url = '<?php echo site_url("$this->controller/save") ?>';


		 

	}



function edit(id){
	$("#judul").html('EDIT DATA TOPIK TUGAS AKHIR ');
	
	v_url = '<?php echo site_url("$this->controller/update") ?>';


	$.ajax({
		url : '<?php echo site_url("$this->controller/get_json_data") ?>/'+id, 
		dataType : 'json',
		success : function(obj) {
			$("#id").val(obj.id);
			$("#kode").val(obj.kode);
			$("#topik").val(obj.topik);
			$("#keterangan").val(obj.keterangan);

		}
	});


	
	 
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