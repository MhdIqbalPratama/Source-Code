    <?php
        require 'functions.php';
        $id  = $_GET['id'];
        $krywn = mysqli_query($conn, "SELECT  * from karyawan where id = '$id'");
        $row = mysqli_fetch_array($krywn);

        function active_radio_button($value,$input){
            $result = $value==$input? 'checked':'';
            return $result;
        }

        if (isset($_POST['update'])){
            if (update($id) > 0){
                echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
            } else {
                echo "
                    <script>
                        alert('data berhasil dihapus!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }


    ?>

    <!DOCTYPE html>
    <html>
        <body>
            <form method="POST" action=" ">
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                <table>
                    <tr><td>Nama</td><td><input type="text" value="<?php echo $row["name"];?>" name="name"></td></tr>
                    <tr><td>Email</td><td><input type="text" value="<?php echo $row["email"];?>" name="email"></td></tr>
                    <tr><td>Alamat</td><td><input type="text" value="<?php echo $row["addres"];?>" name="addres"></td></tr>
                    <tr><td>Jenis Kelamin</td><td>
                            <input type="radio" name="gender" value="Male" <?php echo active_radio_button("Male", $row["gender"])?>>Laki Laki
                            <input type="radio" name="gender" value="Female" <?php echo active_radio_button("Female", $row["gender"])?>>Perempuan
                        </td></tr>
                    <tr><td>Jabatan</td><td><input type="text" value="<?php echo $row["position"];?>" name="position"></td></tr>
                    <tr><td>Status</td><td><input type="text" value="<?php echo $row["status"];?>" name="status"></td></tr>
                    <tr><td colspan="2"><button type="submit" value="submit" name="update">SIMPAN</button>
                            <a href="index.php">Kembali</a></td></tr>
                </table>
            </form>
        </body>
    </html>