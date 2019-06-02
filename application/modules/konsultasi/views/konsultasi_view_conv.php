<?php foreach($record->result() as $row ) : 

$class = ($row->level=="1")?"bg-purple":"bg-teal";
?>

<div class="card">
<div class="card-status <?php echo $class; ?> br-tr-7 br-tl-7"></div>
<div class="card-header">
	<h3 class="card-title"><?php echo $row->nama; ?></h3> &nbsp; Pada : <?php echo $row->waktu; ?>
	 
</div>
<div class="card-body">
	<?php echo $row->pesan; ?>
</div>
</div>


<?php endforeach; ?>