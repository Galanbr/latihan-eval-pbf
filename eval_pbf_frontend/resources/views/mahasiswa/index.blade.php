<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1 class="mb-4">Daftar Mahasiswa</h1>

    <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mhs)
            <tr>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['email'] }}</td>
                <td>{{ $mhs['prodi'] }}</td>
                <td>
                    <a href="/mahasiswa/{{ $mhs['nim'] }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/mahasiswa/{{ $mhs['nim'] }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
