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
  <img width="947" height="475" alt="image" src="https://github.com/user-attachments/assets/2e841dbd-0203-48a4-9d24-faa2872e28a2" />
</p>

---

## Modul Prospek Pelanggan

<p align="center">
    <img width="953" height="477" alt="image" src="https://github.com/user-attachments/assets/cb54edba-963d-4a9e-bd1a-8cc31e504d83" />
</p>

---

## Modul Kampanye Pemasaran

<p align="center">
  <img width="954" height="475" alt="image" src="https://github.com/user-attachments/assets/fdbff722-053d-4e69-bb7a-ca043eee4348" />
</p>

---

## Modul Pengelolaan Stok Barang

<p align="center">
  <img width="954" height="478" alt="image" src="https://github.com/user-attachments/assets/db9f98a1-0202-4ae0-a307-e4142d50d75e" />
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
