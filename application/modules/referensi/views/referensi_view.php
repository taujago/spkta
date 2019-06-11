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

<div class="row">
	<div class="col-md-12" id="listdata">
		
	</div>	
</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">TAMBAH DATA PROGRAM STUDI</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="frmkriteria">

					<div class="row">
						

						<div class="col-md-6">
							<div class="form-group">
							<label for="no_urut" class="form-control-label">No. Urut :</label>
							<input type="text" name="no_urut" class="form-control" id="no_urut">
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group">
							<label for="nim" class="form-control-label">NIM :</label>
							<input type="text" name="nim" class="form-control" id="nim">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
							<label for="nama" class="form-control-label">Nama :</label>
							<input type="text" name="nama" class="form-control" id="nama">
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group">
							<label for="topik_id" class="form-control-label">Topik TA :</label>
							<?php 

								$arr= $this->cm->arr_dropdown_topik();
								 
								echo form_dropdown("topik_id",$arr,'','id="topik_id"  class="form-control"');

							?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
							<label for="judul" class="form-control-label">Judul Tugas Akhir  :</label>
							<input type="text" name="judul" class="form-control" id="judul">
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group">
							<label for="mk[]" class="form-control-label">Progam Studi :</label>
							<?php 

								$arr= $this->cm->arr_dropdown_prodi();
								$arr = $this->cm->add_arr_head($arr,'','== PILIH POGRAM STUDI ==');
								echo form_dropdown("prodi_id",$arr,'','id="prodi_id" class="form-control"');

							?>
							</div>
						</div>

					</div>
					 
					<div class="row" id="mkarea">

						

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