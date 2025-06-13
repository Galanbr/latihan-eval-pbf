<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1 class="mb-4">Daftar Dosen</h1>

    <a href="/dosen/create" class="btn btn-primary mb-3">Tambah Dosen</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosen['nama'] }}</td>
                <td>{{ $dosen['nidn'] }}</td>
                <td>{{ $dosen['email'] }}</td>
                <td>{{ $dosen['prodi'] }}</td>
                <td>
                    <a href="/dosen/{{ $dosen['nidn'] }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/dosen/{{ $dosen['nidn'] }}" method="POST" style="display:inline-block">
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
