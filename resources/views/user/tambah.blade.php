<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tambah User</title>
</head>
<body>
    <div class="container">
        <h2 align="center">Tambah Pengguna</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td colspan="3">Nama</td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="nama" autocomplete="off" placeholder="Nama Lengkap" required></td>
                </tr>
                <tr>
                    <td width="400">Role</td>
                    <td width="50"></td>
                    <td width="400">Email</td>
                </tr>
                <tr>
                    <td>
                        <select name="role" class="form-control" required>
                            <option>Pilih role pengguna</option>
                            <option>admin</option>
                            <option>staff</option>
                        </select>
                    </td>
                    <td></td>
                    <td><input type="email" class="form-control" name="email" placeholder="name@example.com" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>Telp</td>
                </tr>
                <tr>
                    <td><input type="password" class="form-control" name="password" placeholder="Masukkan password" required></td>
                    <td></td>
                    <td><input type="number" class="form-control" name="tlp" placeholder="Masukkan telepon aktif" required></td>
                </tr>
                <tr>
                    <td colspan="3">Alamat lengkap</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="address" id="" rows="4" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3">Unggah gambar</td>
                </tr>
                <tr>
                    <td colspan="3"><input type="file" name="gambar" id="gambar" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><a href="user" onclick="return confirm('Tidak terhubung dengan database')" class="btn btn-dark form-control" name="submit" style="margin-top:20px;">Tambah</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
