<?php $this->load->view('header'); ?>
	<h3>EDIT BUKU</h3>
	<?php foreach ($data_edit as $tes) {
		?>
		
		<form method="post" action="<?php echo base_url().'index.php/mahasiswa/update' ?>">
			<table>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $tes->id ?>"></td>
				</tr>
				<tr>
					<td width="120">Nama</td><td><input type="text" name="nama" value="<?php echo $tes->nama ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td><td><input type="text" name="alamat" value="<?php echo $tes->alamat ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" name="jk" value="Laki-laki" <?php if ($tes->jk=='Laki-laki') {echo set_radio('Laki-laki','Laki-laki',TRUE);} ?>> Laki-Laki <br />
						<input type="radio" name="jk" value="Perempuan" <?php if ($tes->jk=='Perempuan') {echo set_radio('Perempuan','Perempuan',TRUE);} ?>> Perempuan
					</td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td><select name="prodi">
						<option value="PTIK" <?php if($tes->prodi=='PTIK') {echo "selected";} ?>>PTIK</option>
						<option value="PTM" <?php if($tes->prodi=='PTM') {echo "selected";} ?>>PTM</option>
						<option value="PTB" <?php if($tes->prodi=='PTB') {echo "selected";} ?>>PTB</option>
					</select>
				</td>
				</tr>
				<tr>
				<?php $pecah = explode(',', $tes->hobi); ?>
					<td>Hobi</td>
					<td><input type="checkbox" name="hobi[]" value="Sport" <?php if(in_array('Sport', $pecah)) {echo "checked";} ?>> Sport<br>
						<input type="checkbox" name="hobi[]" value="Game" <?php if(in_array('Game', $pecah)) {echo "checked";} ?>> Game
					</td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Update" ></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</body>
</html>