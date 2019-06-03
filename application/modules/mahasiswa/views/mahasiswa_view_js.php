<script type="text/javascript">
var v_url = '';
$(document).ready(function(){

 


var dt = $("#tabel").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets": 0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("$this->controller/get_data") ?>'
		 	});


 

	$("#btnsimpan").click(function(){
		$.ajax({
			url : v_url,
			data : $("#frmdata").serialize(),
			dataType : 'json',
			type : 'post',
			success : function(obj){

				if(obj.error==false) {
					$("#formModal").modal('hide');
					// swal.fire('Info',obj.message,'success');

					swal.fire({title: "Info", text: obj.message , type: "success"}).then(function(){

						// location.reload();
						dt.ajax.reload(false);
					});
					
					// 
				}
				else {
					swal.fire('Errr',obj.message,'danger');
				}


			}
		});
	});

	$("#btncari").click(function(){


		dt
		.column(1).search($("#v_prodi_id").val())
		.column(2).search($("#v_mahasiswa").val())
		.draw();


		return false;
	});


	$("#btnreset").click(function(){
		$("#v_prodi_id").val('').attr('selected','selected');
		$("#v_mahasiswa").val('');
		$("#btncari").click();
	});





});


	function tambahbaru(){
		$("#judul").html('TAMBAH DATA MAHASISWA ');
		$("#formModal").modal('show');
		$("#kode").val('');
		$("#kode").focus();
		$("#mahasiswa").val('');
		v_url = '<?php echo site_url("$this->controller/save") ?>';


		 

	}



function edit(id){
	$("#judul").html('EDIT DATA MAHASISWA ');
	
	v_url = '<?php echo site_url("$this->controller/update") ?>';


	$.ajax({
		url : '<?php echo site_url("$this->controller/get_json_detail") ?>/'+id,
		dataType : 'json',
		success : function(obj){

			$("#id").val(obj.id);
			$("#nim").val(obj.nim);
			$("#nama").val(obj.nama);
			$("#email").val(obj.email);
			$("#prodi_id").val(obj.prodi_id).attr('selected','selected');
			 


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
						// dt.ajax.reload(false);
						// $("#tabel").DataTable.ajax.reload(false);
						// $("#tabel").DataTable.clear().draw();



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