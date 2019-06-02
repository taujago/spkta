<div class="row mb-3">
	<div class="col-md-3">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div>

</div>



<div class="table-responsive">
	<table id="tabel" class="table card-table table-vcenter text-nowrap">
		<thead >
			<tr>
				<th width="5%">NO </th>
				<th width="5%">KODE </th> 
				<th width="20%">TOPIK </th>
				<th width="50%">KETERANGAN </th>
				<th width="10%">PROSES</th>
				 
			</tr>
		</thead>
		<tbody>
<?php 
$n=0;
foreach($record->result() as $row) : 
	$n++;
?>
			<tr>
				<th scope="row"><?php echo $n ?></th>
				<td><?php echo $row->kode; ?></td>
				<td><?php echo $row->topik; ?></td>
				<td><?php echo $row->keterangan; ?></td>
				 
				<td>
					<a href="#!"  onclick="edit('<?php echo $row->id; ?>','<?php echo $row->kode; ?>','<?php echo $row->topik; ?>','<?php echo $row->keterangan; ?>');"  class="btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
					<a href="#!" onclick="hapus('<?php echo $row->id; ?>');"  class="btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>
</td>
			</tr>
<?php endforeach; ?> 
		</tbody>
	</table>
</div>
<!-- table-responsive -->


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