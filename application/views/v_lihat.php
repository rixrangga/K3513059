<?php $this->load->view('header'); ?>

<h3 align="center">Data Mahasiswa</h3>
	<table class="table table-striped">
	<thead align="center">
		<tr>			
			<th style="text-align:center;">Nama</th>
			<th style="text-align:center;">Prodi</th>
			<th style="text-align:center;">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_mahasiswa as $lihat){
		 ?>
		<tr>			
			<td style="text-align:center;"><?php echo $lihat->nama; ?></td>
			<td style="text-align:center;"><?php echo $lihat->prodi; ?></td>
			<td style="text-align:center;">
				<?php echo anchor(base_url().'index.php/mahasiswa/edit2/'.$lihat->id,'<btn class="btn btn-success">Detail</btn>') ?>
			</td>
		</tr>
		<?php 
	}
	?>
	<tbody>
</table>

<?php $this->load->view('footer'); ?>