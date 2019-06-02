<script type="text/javascript">
var v_url = '';
$(document).ready(function(){

$("#tabel").dataTable(); 

// $("#topik_id").select2();

// $("#id_penyakit").select2();

$("#btnlist").click(function(){
	// swal.fire('helllo');
	$.ajax({
		url : '<?php echo site_url("$this->controller/getdata") ?>/'+$("#v_program_studi").val(),
		success : function(htmldata) {
			$("#listdata").html(htmldata);
		}
	});
});



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


 $("#prodi_id").change(function(){
 	  $.ajax({
 	  	url : '<?php  echo site_url("$this->controller/get_matakuliah");?>/'+$(this).val(),
 	  	success : function(htmldata) {
 	  		$("#mkarea").html(htmldata);
 	  	}
 	  });
 });


});


	function tambahbaru(){
		$("#judul").html('TAMBAH DATA REFERNSI KASUS LAMA');
		$("#formModal").modal('show');
		$("#kode").val('');
		$("#gejala").val('');
		v_url = '<?php echo site_url("$this->controller/save") ?>';


		 

	}



function edit(id,kode,prodi){
	$("#judul").html('EDIT DATA REFERNSI KASUS LAMA');
	
	v_url = '<?php echo site_url("$this->controller/update") ?>';



 
	 
	$("#formModal").modal('show');

	$.ajax({
		url : '<?php echo site_url("$this->controller/get_json_detail") ?>/'+id,
		dataType : 'json',
		success : function(obj){

			$("#id").val(obj.detail.id);
			$("#nim").val(obj.detail.nim);
			$("#nama").val(obj.detail.nama);
			$("#topik_id").val(obj.detail.topik_id).attr('selected','selected');
			$("#prodi_id").val(obj.detail.prodi_id).attr('selected','selected');
			  
			$("#mkarea").html(obj.content);


		}
	});


	 

	 
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