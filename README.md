# 🏘️ SiWarga - Sistem Informasi Tata Kelola Warga

SiWarga adalah aplikasi berbasis web yang dikembangkan menggunakan **Laravel** untuk mempermudah tata kelola administrasi di tingkat RT/RW atau Desa. Sistem ini dirancang untuk mendigitalkan proses pendataan warga, pengelolaan kas, hingga pelayanan surat-menyurat secara transparan dan efisien.

## ✨ Fitur Utama
* **👥 Manajemen Data Penduduk:** Pencatatan dan pengelolaan data demografi warga secara terpusat.
* **💰 Kas & Keuangan:** Fitur untuk mencatat dan memonitor riwayat iuran serta pengeluaran kas warga secara transparan.
* **📢 Pelaporan Warga:** Sistem pelaporan mandiri di mana warga dapat menyampaikan keluhan atau laporan kejadian beserta foto bukti langsung dari sistem.
* **📄 Administrasi Persuratan:** Otomatisasi pembuatan dan pencetakan surat pengantar RT/RW untuk berbagai keperluan warga.

## 🛠️ Teknologi yang Digunakan
* **Framework:** Laravel (v11)
* **Bahasa:** PHP (Minimal versi 8.2)
* **Database:** MySQL
* **Tools:** Composer, Artisan CLI

---

## 🚀 Panduan Instalasi (Lokal)
Ikuti langkah-langkah berikut untuk menjalankan proyek SiWarga di komputer lokal (menggunakan Laragon/XAMPP):

### 1. Clone Repository
```bash
git clone [https://github.com/USERNAME-GITHUB-KAMU/siwarga.git](https://github.com/USERNAME-GITHUB-KAMU/siwarga.git)
cd siwarga
```

### 2. Install Dependencies
Pastikan Composer sudah terinstal di komputer Anda, lalu jalankan:
```bash
composer install
```

### 3. Pengaturan Environment
Duplikat file `.env.example` menjadi `.env`, lalu atur koneksi database Anda:
```bash
cp .env.example .env
```
Buka file `.env` dan sesuaikan baris berikut dengan kredensial database lokal Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siwarga
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Migrasi & Seeding Database
Pastikan Anda sudah membuat database kosong bernama `siwarga` di HeidiSQL atau phpMyAdmin, lalu eksekusi tabel beserta data dummynya:
```bash
php artisan migrate --seed
```

### 6. Tautkan Storage (Wajib)
Agar fitur *upload* foto pada Pelaporan Warga dapat berfungsi dan ditampilkan dengan baik, jalankan perintah ini:
```bash
php artisan storage:link
```

### 7. Jalankan Aplikasi
```bash
php artisan serve
```
Aplikasi sekarang dapat diakses melalui browser di alamat `http://localhost:8000` atau melalui domain lokal Laragon Anda.

---

## 📸 Tangkapan Layar (Screenshots)
### Halaman Login
![Halaman Login](https://i.ibb.co.com/N2C5Drr2/siwarga-login.png)

### Dashboard Warga
![Dashboard Warga](https://i.ibb.co.com/bMPzwpfD/siwarga-member.png)

### Dashboard Pengurus
![Dashboard Pengurus](https://i.ibb.co.com/wZg1Gx2Q/siwarga-pengurus.png)

---

## 👨‍💻 Pengembang
Dikembangkan oleh **M. Dzakwan Syafiq**  
*Mahasiswa Sistem Informasi*  
GitHub: [@dzakwan24si](https://github.com/dzakwan24si)