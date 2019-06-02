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
		<label for="matakuliah" class="form-label">Program studi</label>
		<?php 
			$arr = $this->cm->arr_dropdown_prodi();
			$arr = $this->cm->add_arr_head($arr,'','== SEMUA PRODI == ');
			echo form_dropdown("v_prodi_id",$arr,'','id="v_prodi_id" class="form-control"');
		?>
		</div>
	</div> 


	<div class="col-md-3">
	 	<div class="form-group">
		<label for="v_matakuliah" class="form-label">Matakuliah</label>
		<input type="text" class="form-control" name="v_matakuliah" id="v_matakuliah" placeholder="Cari matakuliah">
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
		 <button type="submit" class="btn btn-danger btn-block" id="btnreset"> <i class="fa fa-remove"></i> RESET </button>
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
				<th width="5%">KODE </th> 
				<th width="10%">MATA KULIAH </th>
				<th width="10%">SEMESTER  </th>
				<th width="10%">SKS </th>
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
				<form id="frmkriteria">
					<div class="form-group">
						<label for="kode" class="form-control-label">Kode :</label>
						<input type="text" name="kode" class="form-control" id="kode">
					</div>
					<div class="form-group">
						<label for="matakuliah" class="form-control-label">Matakuliah:</label>
						<input type="text"  name="matakuliah" class="form-control" id="matakuliah">

					</div>
					<div class="form-group">
						<label for="sks" class="form-control-label">Sks :</label>
						<input type="number" min="1"  name="sks" class="form-control" id="sks">

					</div>
					<div class="form-group">
						<label for="semester" class="form-control-label">Semester :</label>
						<?php 
							$arrsmt  = $this->cm->semester;
							echo form_dropdown("semester",$arrsmt,'','id="semester" class="form-control"');
						?>

					</div>

					<div class="form-group">
						<label for="prodi_id" class="form-control-label">Semester :</label>
						<?php 
							$arrprodi  = $this->cm->arr_dropdown_prodi();
							echo form_dropdown("prodi_id",$arrprodi,'','id="prodi_id" class="form-control"');
						?>

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