<?php

    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM profil ORDER BY id ASC");
?>

<html>
<head>    
    <title>Tambah Data</title>
</head>
<body style="background-color:#FFE4C4;"> 

    <br/><br/>
    <center><h1><th>DATA PROFIL MAHASISWA</th></h1></center>
    <center><table width='80%' border=1>

    <tr>
        <th>No</th> <th>Nama</th> <th>Jenis Kelamin</th> <th>Agama</th> <th>Alamat</th> <th>Jurusan</th> <th>Aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jeniskelamin']."</td>";
        echo "<td>".$user_data['agama']."</td>";    
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";      
        echo "<td><a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";     
    }
    ?>
    </table>
    </center>
    <br/><br/>
    <center><a href="tambah data.php">Tambah Data Profil</a></center>
</body>
</html>