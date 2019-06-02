<div class="row mb-3">
	<div class="col-md-3">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div>

</div>

<div class="table-responsive">
<table id="tabel" class="table card-table table-vcenter ">
	<?php  

	$span = $rec_mk->num_rows();
	?>
<thead>
	<tr>
		<th rowspan="2">NO. </th>
		<th rowspan="2">NAMA </th>
		<TH rowspan="2">NIM</TH>
		<TH colspan="<?php echo $span; ?>">NILAI MATA KULIAH </TH>
		<TH rowspan="2">TOPIK </TH>
		<TH rowspan="2">PROSES </TH>
	</tr>
	<tr>
		<?php 
		$x=0;
		foreach($rec_mk->result() as $row) :  
		$x++;
		?>
			<th><?php echo "MK".$x; ?></th>
		<?php endforeach; ?>

	</tr>

</thead>
<tbody>
	<?php 
	$no = 0;
	foreach($rec_referensi->result() as $row ) : 
	$no++;
	?>
	<tr>
		<td><?php echo $no;  ?></td>
		<td><?php echo $row->nim ?></td>
		<td><?php echo $row->nama ?></td>
		 
		<?php 
			$rs = $this->cm->get_nilai($row->id);
			foreach($rs->result() as $rw):
		?>
		<td><?php echo $rw->nilai; ?> </td>
		<?php endforeach; ?>
		<td><?php echo $row->topik ?></td>
		<td>
			<a href="#!"  onclick="edit('<?php echo $row->id; ?>');"  class="btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
					<a href="#!" onclick="hapus('<?php echo $row->id; ?>');"  class="btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>

		</td>
	</tr>
	<?php endforeach; ?>
</tbody>

</table>
</div>