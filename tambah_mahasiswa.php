<form action="proses_tambah.php" method="POST">
    <label>NIM:</label><br>
    <input type="text" name="nim" required><br>
    
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br>
    
    <label>Jenis Kelamin:</label><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    
    <label>Alamat:</label><br>
    <textarea name="alamat" required></textarea><br>
    
    <button type="submit" name="simpan">Simpan</button>
</form>