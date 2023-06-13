<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Show User</title>
    <style>
        th{
            text-align : center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Data Pengguna</h2>
        </table>
        <table class="table table-bordered" style="margin-top: 30px;">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th colspan="3">Aksi</th>
                    <th>Avatar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Role</th>
                </tr>
            </thead>
                <tr>
                    <td align='center'>1</td>
                    <td><a href="#" class="btn btn-primary btn-sm btn-block">Detail</a></td> 
                    <td><a href="edit" class="btn btn-primary btn-sm btn-block">Edit</a></td>
                    <td><a href="#" onclick="return confirm('data Akan di hapus?')" class="btn btn-danger btn-sm btn-block">Hapus</a></td>    
                    <td align='center'>-</td>
                    <td align='center'>Tri Anggoro</td>
                    <td align='center'>a@gmail.com</td>
                    <td align='center'>0888</td>
                    <td align='center'>Admin</td>
                </tr>
        </table>
    </div>
</body>
</html><?php /**PATH /home/anggoro/webapp/resources/views/user/index.blade.php ENDPATH**/ ?>