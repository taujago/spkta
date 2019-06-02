<div class="card">
<div class="card-header">
	<h3 class="card-title">Perhitungan </h3>
</div>
<div class="card-body">

<table class="table table-striped">
	<thead>
		<tr>
			<th rowspan="2">NO </th>
			<TH colspan="<?php echo $rs->num_rows(); ?>">NILAI MK </TH>
			<TH rowspan="2"> KELOMPOK </TH>
		</tr>
		<tr>
			<?php 

			$arr_nilai = array_flip($arr_nilai);
			$n=0;
			foreach($rs->result() as $row):  
				$n++;
			?>
			<th> <?php echo $n; ?>
			</th>
			<?php endforeach; ?>
		</tr>
	</thead>
	<tbody>
		<?php $n=0; 
		foreach($arr_hasil as $id => $bobot ) : 
		$n++; 
		?>
		<tr>
			<th><?php echo $n; ?></th>
			<?php foreach($arr_ref[$id]['nilai'] as $nilai ) :  ?>
				<td><?php echo $arr_nilai[$nilai]; ?>
				</td>
			<?php endforeach; ?>
			<th><?php echo $arr_ref[$id]['kd_topik']; ?></th>
		</tr>
	<?php endforeach; ?>
	</tbody>

 </table>


 </div>
 

 

<hr />
<div class="card">
<div class="card-header">
	<h3 class="card-title">HASIL PERHITUNGAN </h3>
</div>
<div class="card-body">
<table class="table table-striped">
	<thead>
		<tr>
			<th rowspan="2">No.</th>
			<TH rowspan="2">Kasus Lama </TH>
			<th rowspan="2">Jarak Kasus Lama dan Baru </th>
			<th colspan="3">Rekomendasi Topik</th>
		</tr>
		<tr>
			<th>Kode Topik </th>
			<th>Topik </th>
			<th>Keterangan Topik</th>

		</tr>
	</thead>
	<tbody>
		<?php $n=0; 
		foreach($arr_hasil as $id => $bobot ) : 
		$n++; 
		?>
			<tr>
				<td><?php echo $n; ?> </td>
				<td><?php echo "Kasus ".$n; ?></td>
				<td><?php echo $bobot; ?></td>
				<td><?php echo $arr_ref[$id]['kd_topik']; ?></td>
				<td><?php echo $arr_ref[$id]['topik']; ?></td>
				<td><?php echo $arr_ref[$id]['keterangan_topik']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</div>
 



<!-- 

<div class="card">
<div class="card-header">
	<h3 class="card-title">HASIL PERHITUNGAN   </h3>
</div>
								


<div class="table-responsive">
	<table id="tabel" class="table card-table table-vcenter text-nowrap">

<thead >
		
		<tr><th>NO. </th>
			<th > PENYAKIT </th>
			<th > SCORE </th>
		</tr>
		 
</thead>

<tbody>
 

		</tbody>
	</table>
</div>
</div>  -->


 