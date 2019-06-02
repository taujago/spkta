<table class="table-striped table">
	<thead>
		<tr>
			<th rowspan="2">No. </th>
			<th rowspan="2">Penyakit </th>
			<th colspan="2">Jumlah Pasien
			<th rowspan="2">Jumlah </th>

		</tr>
		<tr>
			<th>P </th>
			<th>L </th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$n=0;

		$tl=0; 
		$tp=0;

		foreach($record->result() as $row) : 
		$tl += $row->L;
		$tp += $row->P; 
		$n++;
		?>
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $row->penyakit; ?></td>
			<td><?php echo $row->L; ?></td>
			<td><?php echo $row->P; ?></td>
			<td><?php echo $row->jumlah; ?></td>
		</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="2"><strong>Total </strong></td>
		<td><?php echo $tp; ?></td>
		<td><?php echo $tl; ?></td>
		<td><?php echo ($tl+$tp); ?></td>

	</tr>
	</tbody>
</table>