<style type="text/css">
	.dataTables_filter, .dataTables_info { display: none; }

</style>



  <div class="row mb-3">
	<div class="col-md-3">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div>

</div>   


<form>
<div class="row">
	
	<div class="col-md-3">
	 	<div class="form-group">
		<label for="v_prodi_id" class="form-label">Program studi</label>
		<?php 
			$arr = $this->cm->arr_dropdown_prodi();
			$arr = $this->cm->add_arr_head($arr,'','== SEMUA PRODI == ');
			echo form_dropdown("v_prodi_id",$arr,'','id="v_prodi_id" class="form-control"');
		?>
		</div>
	</div> 


	<div class="col-md-3">
	 	<div class="form-group">
		<label for="v_matakuliah" class="form-label">NIM / Nama </label>
		<input type="text" class="form-control" name="v_matakuliah" id="v_matakuliah" placeholder="Cari NIM atau Nama ">
		</div>
	</div> 	
	<div class="col-md-2">
	 	<div class="form-group">
		<label for="matakuliah" class="form-label">&nbsp;</label>
		 <button type="submit" class="btn btn-info btn-block" id="btncari"> <i class="fa fa-search"></i> CARI </button>
		</div>
	</div>
	<div class="col-md-2">
	 	<div class="form-group">
		<label for="" class="form-label">&nbsp;</label>
		 <a href="#!" class="btn btn-danger btn-block" id="btnreset"> <i class="fa fa-remove"></i> RESET </a>
		</div>
	</div>
	<!-- <div class="col-md-2 pt-5">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success pt-2" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div> 	 -->
	  

</div>
</form>





<div class="table-responsive">
	<table id="tabel" class="table card-table table-vcenter text-nowrap">
		<thead >
			<tr>
				<th width="5%">NO </th>
				<th width="5%">NIM </th> 
				<th width="10%">NAMA</th>
				<th width="10%">EMAIL </th>
				<th width="10%">PRODI </th> 
				<th width="10%">PROSES</th>
				 
		 
			</tr>
		</thead>
		<tbody>
 		
		</tbody>
	</table>
</div>
<!-- table-responsive -->


<div class="modal fade" id="formModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">TAMBAH DATA PROGRAM STUDI</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="frmdata">


					<div class="form-group">
					<label for="prodi_id" class="form-label">Program studi</label>
					<?php 
						$arr = $this->cm->arr_dropdown_prodi();
						 
						echo form_dropdown("prodi_id",$arr,'','id="prodi_id" class="form-control"');
					?>

					</div>


					<div class="form-group">
						<label for="nim" class="form-control-label">NIM :</label>
						<input type="text" name="nim" class="form-control" id="nim">
					</div>
					<div class="form-group">
						<label for="nama" class="form-control-label">Nama :</label>
						<input type="text"  name="nama" class="form-control" id="nama">

					</div>
					<div class="form-group">
						<label for="password" class="form-control-label">Kata sandi  :</label>
						<input type="password"  name="password" class="form-control" id="password">

					</div>
					 
					<div class="form-group">
						<label for="email" class="form-control-label">Email :</label>
						<input type="email"  name="email" class="form-control" id="email">

					</div>
					 

					

					

					 
					 

<input type="hidden" name="id" id="id">

				</form>
			</div>
			<div class="modal-footer">
				
				<button id="btnsimpan" type="button" class="btn btn-primary"><i class="fa fa fa-paper-plane"></i> SIMPAN</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php 
$this->load->view($this->controller."_view_js");
?>