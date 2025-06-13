# Aplikasi Manajemen Data Dosen & Mahasiswa (Laravel Frontend + CodeIgniter Backend)

Aplikasi ini dibuat sebagai bagian dari UAS praktikum **Pemrograman Berbasis Framework**. Sistem ini terdiri dari:
- 🎯 Backend: CodeIgniter 4 (REST API)
- 🎯 Frontend: Laravel 10 (menampilkan & mengelola data dari API)

---

## 📦 Fitur Utama

- 🔍 Menampilkan data dosen dan mahasiswa
- ➕ Menambahkan data
- 📝 Mengedit data
- ❌ Menghapus data
- 🎨 Tampilan responsive dengan Bootstrap
- 🚫 Tanpa autentikasi (akses bebas)

---

## 🧱 Struktur Proyek

```
eval_pbf/
├── eval_pbf_backend/      ← CodeIgniter (API)
├── eval_pbf_frontend/     ← Laravel (Frontend)
```

---

## 🚀 Cara Menjalankan Aplikasi

### 1. Clone Repository (Jika dari Git)
```bash
git clone [url_repo_kamu]
cd eval_pbf/
```

### 2. Jalankan Backend (CodeIgniter)
```bash
cd eval_pbf_backend
php spark serve --port=8080
```
> API aktif di: http://localhost:8080

### 3. Jalankan Frontend (Laravel)
```bash
cd ../eval_pbf_frontend
composer install
php artisan serve --port=8000
```
> Frontend aktif di: http://localhost:8000

---

## ⚙️ Konfigurasi .env Laravel

```env
APP_URL=http://localhost:8000
...

# Database tidak digunakan di frontend
# Fokus ke API
```

---

## 🌐 Endpoint API (Dari Backend CI4)

| Method | Endpoint                | Keterangan             |
|--------|-------------------------|------------------------|
| GET    | `/dosen`               | Ambil semua dosen      |
| POST   | `/dosen`               | Tambah dosen           |
| GET    | `/dosen/{nidn}`        | Detail dosen (by NIDN) |
| PUT    | `/dosen/{nidn}`        | Update dosen           |
| DELETE | `/dosen/{nidn}`        | Hapus dosen            |
| GET    | `/mahasiswa`           | Ambil semua mahasiswa  |
| POST   | `/mahasiswa`           | Tambah mahasiswa       |
| GET    | `/mahasiswa/{nim}`     | Detail mahasiswa       |
| PUT    | `/mahasiswa/{nim}`     | Update mahasiswa       |
| DELETE | `/mahasiswa/{nim}`     | Hapus mahasiswa        |

---

## 📁 Struktur Folder Frontend

```
resources/views/
├── dosen/
│   ├── index.blade.php
│   ├── create.blade.php
│   └── edit.blade.php
├── mahasiswa/
│   ├── index.blade.php
│   ├── create.blade.php
│   └── edit.blade.php
```

---

## 🖼️ Tampilan Halaman

- `/dosen` → Menampilkan list dosen
- `/dosen/create` → Form tambah dosen
- `/dosen/{nidn}/edit` → Form edit dosen
- `/mahasiswa` → Menampilkan list mahasiswa
- `/mahasiswa/create` → Form tambah mahasiswa
- `/mahasiswa/{nim}/edit` → Form edit mahasiswa

---

## 💡 Catatan Tambahan

- Project ini **tidak menggunakan autentikasi**
- Validasi dilakukan di sisi Laravel frontend (misal: email valid, nim/nidn harus numeric, dll)
- Aplikasi sudah responsive dengan Bootstrap 5

---

## 👨‍💻 Dibuat Oleh

> Alan  
> D3 Teknik Informatika  
> Politeknik Negeri Cilacap  
> UAS Praktikum Pemrograman Berbasis Framework