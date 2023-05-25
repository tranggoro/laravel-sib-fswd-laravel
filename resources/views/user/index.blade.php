@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered" style="margin-top: 30px;">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="https://indonesia.go.id/assets/img/profile/profile.png" height="30" width="30" alt="..."></td>
                            <td>Tri Anggoro</td>
                            <td>a@gmail.com</td>
                            <td>088</td>
                            <td>Admin</td>
                            <td>
                                <a href="#" class="btn btn-primary">Detail</a> 
                                <a href="{{ route('user.edit')}}" class="btn btn-warning">Edit</a>
                                <a href="#" onclick="return confirm('Anda menghapus data ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection