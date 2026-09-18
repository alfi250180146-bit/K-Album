# K-Pop Collector Archive

## Deskripsi Project

K-Pop Collector Archive adalah mini project Product Information System berbasis PHP yang digunakan untuk menampilkan informasi koleksi album K-Pop dari BTS, SEVENTEEN, dan CORTIS.

Project ini dibuat dengan konsep arsitektur 3 layer, yaitu Data Layer, Processing Layer, dan Presentation Layer. Data album disimpan dalam array multidimensional, kemudian diproses untuk menghitung total nilai stok dan menentukan warna baris tabel berdasarkan jumlah stok.

## Tujuan

1. Menerapkan konsep pemisahan data, proses, dan tampilan.
2. Menggunakan array multidimensional untuk menyimpan data produk.
3. Membuat fungsi untuk menghitung total nilai stok.
4. Menerapkan conditional untuk memberikan warna pada stok kritis.
5. Menampilkan data menggunakan perulangan `foreach` pada tabel HTML.

## Tema Project

**K-Pop Collector Archive**

Data produk yang digunakan berupa album K-Pop dari:

* BTS
* SEVENTEEN
* CORTIS

Field data yang digunakan:

* ID
* Nama
* Kategori
* Harga
* Stok
* Deskripsi

## Struktur Arsitektur

### 1. Data Layer — `products.php`

File ini berfungsi untuk menyimpan data album dalam bentuk array multidimensional.

Data yang disimpan meliputi ID, nama album, kategori, harga, stok, dan deskripsi.

### 2. Processing Layer — `functions.php`

File ini berisi fungsi pengolahan data, yaitu:

* `hitungTotalNilaiStok()` untuk menghitung total nilai stok.
* `tentukanWarnaStok()` untuk menentukan warna baris tabel jika stok kurang dari 3.

Rumus yang digunakan:

**Nilai Stok = Harga × Stok**

### 3. Presentation Layer — `index.php`

File ini berfungsi untuk menampilkan data ke halaman web.

File `index.php` menggunakan:

* `require_once` untuk memanggil file `products.php` dan `functions.php`.
* `foreach` untuk menampilkan setiap data album ke tabel HTML.
* Conditional class untuk memberikan warna pada baris dengan stok kurang dari 3.

## Struktur Folder

```text
kpop-collector-archive/
│
├── products.php
├── functions.php
├── index.php
└── README.md
```

## Cara Menjalankan Project

1. Pastikan XAMPP sudah terinstal.

2. Aktifkan **Apache** pada XAMPP.

3. Simpan folder project di dalam:

   `C:\xampp\htdocs\`

4. Buka browser.

5. Masukkan alamat:

   `http://localhost/kpop-collector-archive/`

6. Halaman informasi album akan ditampilkan.

## Fitur Project

* Menampilkan daftar album K-Pop.
* Menampilkan kategori artis.
* Menampilkan harga album.
* Menampilkan jumlah stok.
* Menghitung total nilai stok.
* Memberikan warna berbeda pada baris dengan stok kurang dari 3.

## Teknologi yang Digunakan

* PHP
* HTML
* CSS
* XAMPP
* Visual Studio Code

## Kesimpulan

Project ini menerapkan konsep arsitektur 3 layer secara sederhana. Data disimpan pada Data Layer, diproses pada Processing Layer, dan ditampilkan melalui Presentation Layer. Dengan pemisahan tersebut, setiap bagian memiliki tugas yang jelas dan lebih mudah dipahami.

---

**Mini Project 1: Product Information System (Desain)**
