<style type="text/css">
	.dataTables_filter {
		display: none;
	}
</style>
 <div class="card">
<div class="card-header">
	<h3 class="card-title">REKOMENDASI JUDUL BERDASARKAN TOPIK </h3>
</div>
<div class="card-body">

<div class="row mb-5">
	<div class="col-md-12">
		<div class="form-group">
			<label for="cari">Pencarian judul : </label>
		<input type="text" id="cari" class="form-control" placeholder="Masukkan judul yang dicari">
		</div>
	</div>
</div>

<table id="tabel" class="table table-striped">
	<thead>
		<!-- <tr>
			<th rowspan="2">No.</th>
			<TH rowspan="2">Kasus Lama </TH>
			<th rowspan="2">Jarak Kasus Lama dan Baru </th>
			<th colspan="3">Rekomendasi Topik</th>
			<th rowspan="2">Pilihan</th>

		</tr>
		<tr>
			<th>Kode Topik </th>
			<th>Topik </th>
			<th>Keterangan Topik</th>

		</tr> -->

		<tr>
			<th>No.</th>
			<th>Kode Topik</th>
			<th>Topik</th>
			<th>Keterangan Topik</th>
			<th>Nilai Kedekatan</th>
			<th>Judul</th>
			<th>Pilihan</th>
		</tr>


	</thead>
	<tbody>
		<?php $n=0; 
		foreach($arr_hasil as $id => $bobot ) : 
		$n++; 
		$cek = ($n==1)?'checked="checked"':"";
		?>
			<tr>
				<td><?php echo $n; ?> </td>
				<td><?php echo $arr_ref[$id]['kd_topik']; ?></td>
				<td><?php echo $arr_ref[$id]['topik']; ?></td>
				<td><?php echo $arr_ref[$id]['keterangan_topik']; ?></td> 
				<td><?php echo $bobot; ?></td>
				<td><?php echo $arr_ref[$id]['judul']; ?></td> 
				<td><input <?php echo $cek; ?> id="pilihan" name="pilihan" type="radio" value="<?php echo "$id|$konsultasi_id"; ?>"></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div class="row">
	<div class="col-md-2">
		<a href="#!" id="btnsimpan" class="btn btn-block btn-success"><i class="fa fa-location-arrow"></i> SIMPAN </a>
	</div>		
</div>
</div>
</div>
 

<script type="text/javascript">
$(document).ready(function(){

var tabel = $("#tabel").DataTable();

$('#cari').on('keyup change', function () {
    tabel.search(this.value).draw();
});

	$("#btnsimpan").click(function(){
		$.ajax({
			url : '<?php echo site_url("$this->controller/savejudul"); ?>',
			type : 'post',
			dataType : 'json',
			data : { pilihan : $("#pilihan").val() },
			success : function(obj){

				
				if(obj.error == false) { 

				swal.fire('Info',obj.message,'success');

				}
				else {
					swal.fire('Error',obj.message,'error');
				}

			}
		});
	});
});
</script>

 