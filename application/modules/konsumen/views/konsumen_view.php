<div class="row mb-3">
	<div class="col-md-3">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div>

</div>


	<div class="card">
	<div class="card-header">
		<h3 class="card-title">DATA PASIEN </h3>
	</div>
									


<div class="table-responsive">
	<table id="tabel" class="table card-table table-vcenter text-nowrap">
		<thead >
			 
			<tr>
				
				 
				<th width="">NO.</th>
				<th width="">USERNAME</th>
				<th width="">NAMA</th>
				<th width="">UMUR</th>
				<th width="">JK</th>
				<th width="">NOMOR HP</th>
				<th width="">ALAMAT</th>
				<th width="">PROSES</th>
				 
				 
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
				<td><?php echo $row->username; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->umur; ?></td>
				<td><?php echo $row->jk; ?></td>
				<td><?php echo $row->hp; ?></td>
				<td><?php echo $row->alamat; ?></td>
				 
				 
				<td>
					<a href="#!" onclick="edit('<?php echo $row->id ?>','<?php echo $row->username ?>','<?php echo $row->nama ?>','<?php echo $row->hp ?>','<?php echo $row->alamat ?>','<?php echo $row->umur ?>','<?php echo $row->jk ?>')"   class="btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
					<a href="#!" onclick="hapus('<?php echo $row->id; ?>');"  class="btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>
</td>
			</tr>
<?php endforeach; ?> 
		</tbody>
	</table>
</div>
</div> <!-- card --> 
<!-- table-responsive -->


<div class="modal fade" id="formModal" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="judul">TAMBAH DATA ALTERNATIF KENDARAAN</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<form id="frmkriteria">
				<div class="row">

				 <div class="col-md-12">
										<div class="form-group">
										<label for="username" class="form-label">Nama pengguna</label>
										<input type="text" class="form-control" id="username" name="username"  placeholder="Nama penggguna">
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="password" class="form-label">Kata sandi
											 
										</label>
										<input type="password" class="form-control" id="password"  name="password" placeholder="Kata sandi">
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="password2" class="form-label">Ulangi Kata sandi
											 
										</label>
										<input type="password" class="form-control" id="password2"  name="password2" placeholder="Kata sandi">
									</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
										<label for="username" class="form-label">Nama lengkap</label>
										<input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama lengkap">
									</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
										<label for="jk" class="form-label">JK</label>
										<?php 
										$arr = array("L"=>"Laki laki ","P"=>"Perempuan");
										echo form_dropdown("jk",$arr,'','class="form-control" id="jk"');
										?>
									</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="umur" class="form-label">Umur</label>
										<input type="number" class="form-control" id="umur" name="umur"  placeholder="Umur">
									</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
										<label for="hp" class="form-label">Nomor HP</label>
										<input type="text" class="form-control" id="hp" name="hp"  placeholder="Nomor HP">
									</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
										<label for="alamat" class="form-label">Alamat</label>
										<input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat">
									</div>
									</div>
				
					 



				

				 

<input type="hidden" name="id" id="id">
	</div>
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