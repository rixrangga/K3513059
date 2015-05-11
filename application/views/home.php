<?php $this->load->view('header'); ?>

	<div class="jumbotron">
        <h2>Selamat Datang di Web FOSS PTIK 2013!</h2>
        <p class="lead">Web ini dibuat sebagai penyelesaian tugas mata kuliah FOSS pada prodi Pendidikan Teknik Informatika dan Komputer di Universitas Sebelas Maret Surakarta</p>
        <?php echo anchor(base_url().'index.php/mahasiswa/about','<btn class="btn btn-large btn-success">About Me >>></btn>') ?>
    </div>

<?php $this->load->view('footer'); ?>