<h2> Input Barang </h2>

<form action="tambah" method="POST">
	Nama * : <input type="text" name="nama"> <br> <?php echo form_error('nama');?>
	No Hp * : <input type="text" name="no_hp"> <br>
	Keterangan Barang : <textarea name="keterangan"></textarea> <br>
	No. Loker * : <input type="text" name="no_loker" class="form-control"> <br>
	<input type="submit" name="submit" value="simpan">
	<br>
	keterangan : (*) wajib diisi
	
</form>

<?php
// echo validation_errors();
?>