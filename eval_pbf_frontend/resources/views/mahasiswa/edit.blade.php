<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Form Edit Mahasiswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/mahasiswa/{{ $mahasiswa['nim'] }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa['nama'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa['nim'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $mahasiswa['email'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{ $mahasiswa['prodi'] }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
