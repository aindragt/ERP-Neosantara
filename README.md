# ERP Neosantara

ERP Neosantara merupakan aplikasi **Enterprise Resource Planning (ERP)** sederhana yang dikembangkan sebagai tugas mata kuliah **Enterprise Resource Planning (ERP)**.

Aplikasi ini dibangun menggunakan **Laravel 12** dan **FilamentPHP v5** untuk membantu perusahaan dalam mengelola proses bisnis pada bidang pemasaran dan gudang.

---

## 👥 Tim Pengembang

| Nama | Peran |
|------|------|
| **Indra Pramudya** | Ketua Kelompok & Modul Pencarian Prospek Pelanggan |
| **Adrian Havis Yandisa** | Modul Kampanye Pemasaran |
| **Soaloon MT Sianturi** | Modul Pengelolaan Stok Barang di Gudang |

---

## 📌 Studi Kasus

ERP Neosantara dirancang untuk membantu perusahaan dalam mengelola proses bisnis melalui tiga modul utama:

- 📋 Pencarian Prospek Pelanggan
- 📢 Kampanye Pemasaran
- 📦 Pengelolaan Stok Barang di Gudang

---

# ✨ Tampilan Aplikasi

## Login

<p align="center">
  <img width="1917" height="901" alt="image" src="https://github.com/user-attachments/assets/3e7f29be-a3ff-4348-a3cd-7a534b25afc1" />
</p>

---

## Dashboard

<p align="center">
  <img width="1917" height="892" alt="image" src="https://github.com/user-attachments/assets/e2f5b2f8-365a-461b-9c2b-dafbc4b479ad" />
</p>

---

## Modul Prospek Pelanggan

<p align="center">
  <img width="1917" height="902" alt="image" src="https://github.com/user-attachments/assets/11cd960d-eaa9-4d09-8c3e-bde2e03f9102" />
</p>

---

## Modul Kampanye Pemasaran

<p align="center">
  <img width="953" height="479" alt="image" src="https://github.com/user-attachments/assets/e8be1692-bde7-4084-9823-6a5239dca694" />
</p>

---

## Modul Pengelolaan Stok Barang

<p align="center">
  <img src="screenshots/products.png" width="900">
</p>

---

## ✨ Fitur

### 📋 Pencarian Prospek Pelanggan

- Menambah data prospek
- Mengubah data prospek
- Menghapus data prospek
- Melakukan pencarian prospek
- Mengelola status prospek

---

### 📢 Kampanye Pemasaran

- Menambah data kampanye
- Mengubah data kampanye
- Menghapus data kampanye
- Mengelola anggaran kampanye
- Mengatur periode kampanye

---

### 📦 Pengelolaan Stok Barang

- Menambah data produk
- Mengubah data produk
- Menghapus data produk
- Mengelola stok barang
- Mengelola batas minimum stok

---

## 🛠️ Teknologi

- Laravel 12
- FilamentPHP v5
- PHP 8.3+
- SQLite
- Composer
- Git
- GitHub

---

## 📂 Struktur Modul

```text
Dashboard
│
├── CRM
│   └── Prospek Pelanggan
│
├── Marketing
│   └── Kampanye Pemasaran
│
└── Warehouse
    └── Pengelolaan Stok Barang
```

---

## 🚀 Cara Menjalankan

```bash
git clone https://github.com/aindragt/ERP-Neosantara.git

cd ERP-Neosantara

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate --seed

php artisan serve
```

---

## 🔐 Login Default

| Email | Password |
|--------|----------|
| admin@neosantara.com | password |

---

## 🎯 Tujuan

ERP Neosantara dikembangkan sebagai implementasi konsep Enterprise Resource Planning (ERP) menggunakan Laravel dan FilamentPHP. Sistem ini mengintegrasikan pengelolaan prospek pelanggan, kampanye pemasaran, dan stok barang ke dalam satu aplikasi berbasis web yang sederhana dan mudah digunakan.

---

## 📄 Lisensi

Project ini dibuat untuk memenuhi tugas mata kuliah **Enterprise Resource Planning (ERP)**.
