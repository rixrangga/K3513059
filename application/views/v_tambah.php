<?php $this->load->view('header'); ?>

<h3 align="center">Tambah Data</h3>
	<form method="post" action="<?php echo base_url().'index.php/mahasiswa/tambah_act' ?>">
		<table class="table table-hover">
			<tr>
				<td width="120">&nbsp;</td>
				<td width="200">Nama</td>
				<td><input type="text" name="nama" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Alamat</td><td>
				<textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki" class="form-control"> Laki-Laki <br />
					<input type="radio" name="jk" value="Perempuan" class="form-control"> Perempuan
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Prodi</td>
				<td><select name="prodi" class="form-control">
						<option value="PTIK">PTIK</option>
						<option value="PTM">PTM</option>
						<option value="PTB">PTB</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Hobi</td>
				<td><input type="checkbox" name="hobi[]" value="Sport" class="form-control"> Sport <br />
					<input type="checkbox" name="hobi[]" value="Game" class="form-control"> Game
					</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
				<td><center><input type="submit" value="Input" class="btn btn-success"></center></td>
			</tr>
		</table>
	</form>

<?php $this->load->view('footer'); ?>