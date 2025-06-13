<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Form Edit Dosen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/dosen/{{ $dosen['nidn'] }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $dosen['nama'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ $dosen['nidn'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $dosen['email'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{ $dosen['prodi'] }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="/dosen" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
