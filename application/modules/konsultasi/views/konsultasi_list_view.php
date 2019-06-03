<div class="card">
<div class="card-header">
	<h3 class="card-title">DATA KONSULTASI </h3>
</div>

<div class="table-responsive mb-5">
	<table id="tabel" class="table card-table table-vcenter ">


	<thead>
		<tr><th>NO. </th>
			<TH>NIM </TH>
			<TH>NAMA </TH>
			<th>KODE TOPIK </th>
			<th>TOPIK </th>
			<th>KETERANGAN </th>
			<TH>NILAI KEDEKATAN</TH>			 
			<th></th>
		</tr>
	</thead>
	<TBODY>
		<?php
		$n=0;
		foreach($record->result() as $row) : 
		$n++;
		?>

		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $row->nim; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->topik_kode; ?></td>
			<td><?php echo $row->topik; ?></td>
			<td><?php echo $row->keterangan; ?></td>
			<td><?php echo $row->skor; ?></td>
			<td><a class="btn btn-primary" href="<?php echo site_url("$this->controller/review/$row->id") ?>" ><i class="fa fa-list"></i> LIHAT HASIL</a></td>

		</tr>

	<?php endforeach; ?>
	</TBODY>
</table>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#tabel").dataTable();
});	

</script>