<!DOCTYPE html>
<html>
<head>
	<title>Upload File Image Dengan CodeIgniter 3</title>
</head>
<body style="width: 800px; margin: auto; padding: 10px;">
	<h2 style="text-align: center;">Tabel Data User</h2>
	<button onclick="document.location='<?= base_url('welcome/hal_tambah') ?>'">Tambah Data</button>
	<br /><br />

	<table border="1" style="width: 100%; border-collapse: collapse;">
		<thead>
			<tr>
				<th style="width: 30px">No</th>
				<th style="width: 100px">Username</th>
				<th>Nama</th>
				<th style="width: 100px">Jurusan</th>
				<th style="width: 100px">Foto</th>
			</tr>
		</thead>
		<tbody style="text-align: center;">
			<?php if (empty($queryUser)): ?>
				<tr>
					<td colspan="5">Data Tidak Tersedia</td>
				</tr>
			<?php else: ?>
				<?php $nomor_urut = 0; ?>
				<?php foreach ($queryUser as $row): ?>
					<?php $nomor_urut++; ?>
					<tr>
						<td><?php echo $nomor_urut; ?></td>
						<td><?php echo $row->username; ?></td>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->jurusan; ?></td>
						<td><img style="width: 200px" src="<?php echo $row->gambar; ?>"></td>
					</tr>					
				<?php endforeach ?>
	
			<?php endif ?>
			
		</tbody>
	</table>
	
</body>
</html>