<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data Karyawan</h1>

    <form action="" method="POST">
        <table>
                <tr><td><label for="name">Nama</label>
                <input type="text" name="name" id="name"></td></tr>
                <tr><td> <label for="email">Email</label>
                <input type="text" name="email" id="email"></td></tr>
                <tr><td><label for="addres">Alamat</label>
                <input type="text" name="addres" id="addres"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="gender" value="Male" >Laki Laki
                        <input type="radio" name="gender" value="Female" >Perempuan
                </td></tr>
                <tr><td><label for="position">Jabatan</label>
                <input type="text" name="position" id="position"></td></tr>
                <tr><td><label for="status">Status</label>
                <input type="text" name="status" id="status"></td></tr>
                <tr><td><button type="submit" name="submit">Tambah Data</button></td></tr>
        </table>
    </form>
</body>
</html>