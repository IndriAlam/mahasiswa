<html>
<head>
    <title>Tambah Data Profil</title>
</head>

<body style="background-color:#FFE4C4;">
    <center>
    <br/><br/>

    <form action="tambah data.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                 <td><input type="radio" name="jeniskelamin" value="Laki-Laki" checked>Laki-Laki<br/>  
                    <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br/>  
                </td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
                </td>
            </tr>
            <tr> 
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
            <tr> 
                <td>Jurusan</td>
                 <td><select name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Arsitek">Teknik Arsitek</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select>
                </td>
            </tr>
            <br>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table><br><a href="index.php">Kembali Halaman Awal</a>
        </center>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];

        
        include_once("config.php");
     
        $result = mysqli_query($mysqli, "INSERT INTO profil(nama,jeniskelamin,agama,alamat,jurusan) VALUES ('$nama','$jeniskelamin','$agama','$alamat','$jurusan')");
        
        echo "<a href='index.php'></a>";
    }
    ?>
</body>
</html>