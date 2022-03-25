<!DOCTYPE html>
<html>
<head>
    <title>Upload File Image Dengan CodeIgniter 3</title>
</head>
<body style="width: 800px; margin: auto; padding: 10px;">
    <h2 style="text-align: center;">Form Upload File (PDF)</h2>
    <hr>
    <form action="<?= base_url('welcome/fungsiUploadGambar') ?>" method="post" enctype="multipart/form-data">
        <b>Username :</b>
        <input type="text" name="username" value="" placeholder=""><br /><br />

        <b>Password :</b>
        <input type="password" name="password" value="" placeholder=""><br /><br />

        <b>Nama :</b>
        <input type="text" name="nama" value="" placeholder=""><br /><br />

        <b>Jurusan :</b>
        <input type="text" name="jurusan" value="" placeholder=""><br /><br />

        <b>Status :</b>
        <input type="radio" name="status" value="Aktif">
        <label for="html">Aktif</label>
        <input type="radio" name="status" value="Non Aktif">
        <label for="css">Non Aktif</label><br><br />

        <b>Upload File :</b>
        <input type="file" name="gambar" accept="image/*">
        <button type="submit">Upload File</button>
    </form>
    <hr>
</body>
</html>