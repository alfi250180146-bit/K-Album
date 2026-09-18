# 🎵 K-Pop Collector Archive

<p align="center">
  <img src="image/tampilan.jpg" width="800">
</p>

<p align="center">
  <b>Mini Project 1 PHP — Arsitektur 3 Layer</b>
</p>

---

## Tentang Project

**K-Pop Collector Archive** adalah website sederhana berbasis PHP yang digunakan untuk menampilkan informasi koleksi album K-Pop.

Project ini dibuat sebagai **Mini Project 1 PHP** dengan menerapkan konsep **arsitektur 3 layer**, yaitu:

- **Data Layer** → menyimpan data album.
- **Processing Layer** → mengolah data dan menghitung total nilai stok.
- **Presentation Layer** → menampilkan data dalam bentuk tabel HTML.

Project menggunakan koleksi album dari tiga grup K-Pop, yaitu **BTS, SEVENTEEN, dan CORTIS**.

---

## Tujuan

Project ini bertujuan untuk:

1. Memahami penggunaan PHP dasar.
2. Menerapkan array multidimensional.
3. Membuat dan menggunakan function pada PHP.
4. Menerapkan percabangan `if`.
5. Menggunakan `foreach` untuk menampilkan data.
6. Memahami penerapan arsitektur 3 layer pada aplikasi sederhana.

---

## 💿 Informasi Album

Website menampilkan informasi:

| Field | Keterangan |
|---|---|
| ID | Nomor identitas album |
| Nama Album | Nama album K-Pop |
| Kategori | Nama grup/artis |
| Harga | Harga setiap album |
| Stok | Jumlah album yang tersedia |
| Deskripsi | Penjelasan singkat tentang album |

Album dengan stok kurang dari 3 akan diberikan warna berbeda sebagai tanda **stok kritis**.

---

## Koleksi Album

Project ini memiliki **9 album** dari tiga grup:

### BTS

- MAP OF THE SOUL : 7
- BE
- Proof
- LOVE YOURSELF 結 'Answer'

### SEVENTEEN

- 17 IS RIGHT HERE
- SEVENTEENTH HEAVEN
- HAPPY BURSTDAY

### CORTIS

- COLOR OUTSIDE THE LINES
- GREENGREEN

---

## Arsitektur 3 Layer

### 1. Data Layer — `products.php`

Berisi data koleksi album dalam bentuk **array multidimensional**.

Data yang disimpan:

```text
ID
Nama
Kategori
Harga
Stok
Deskripsi
```

### 2. Processing Layer — `functions.php`

Berisi fungsi untuk memproses data.

Fungsi utama:

```php
hitungTotalNilaiStok()
```

Fungsi tersebut menghitung total nilai stok menggunakan:

```text
Harga × Stok
```

File ini juga menggunakan conditional:

```php
if ($stok < 3)
```

untuk memberikan tanda pada album dengan stok kritis.

### 3. Presentation Layer — `index.php`

Berfungsi menampilkan hasil pengolahan data kepada pengguna.

File ini menggunakan:

- `require_once`
- `foreach`
- HTML Table
- PHP
- CSS

---

## Struktur Project

```text
kpop-collector-archive/
│
├── image/
│   └── tampilan.jpg
│
├── products.php
├── functions.php
├── index.php
└── README.md
```

### Penjelasan File

| File/Folder | Fungsi |
|---|---|
| `products.php` | Menyimpan data album |
| `functions.php` | Mengolah data dan membuat fungsi |
| `index.php` | Menampilkan website |
| `image/` | Menyimpan gambar tampilan website |
| `README.md` | Dokumentasi project |

---

## Teknologi yang Digunakan

- **PHP**
- **HTML**
- **CSS**
- **XAMPP**
- **Visual Studio Code**

Project tidak menggunakan database karena fokus pada penerapan dasar PHP dan konsep **3 layer architecture**.

---

## Cara Menjalankan Project

### 1. Simpan Project

Letakkan folder project di:

```text
C:\xampp\htdocs\
```

Sehingga menjadi:

```text
C:\xampp\htdocs\K-pop collector archive
```

### 2. Jalankan XAMPP

Aktifkan:

```text
Apache
```

MySQL tidak diperlukan karena project tidak menggunakan database.

### 3. Buka Browser

Akses:

```text
http://localhost/K-pop collector archive/
```

Website akan menampilkan halaman **K-Pop Collector Archive**.

---

## Perhitungan Total Nilai Stok

Sistem menghitung nilai seluruh stok album dengan rumus:

```text
Total Nilai Stok = Harga Album × Jumlah Stok
```

Dari data yang tersedia, total nilai stok seluruh album adalah:

```text
Rp 9.980.000
```

---

## Fitur

- Menampilkan 9 koleksi album K-Pop.
- Menampilkan nama grup/artis.
- Menampilkan harga album.
- Menampilkan jumlah stok.
- Menampilkan deskripsi album.
- Menghitung total nilai stok secara otomatis.
- Memberikan tanda warna pada stok kurang dari 3.
- Menggunakan konsep arsitektur 3 layer.

---

## Konsep PHP yang Diterapkan

```text
Array Multidimensional
        ↓
Function
        ↓
Conditional (if)
        ↓
Perulangan foreach
        ↓
Pengolahan Data
        ↓
Tampilan HTML
```

Konsep tersebut digunakan untuk memisahkan penyimpanan data, proses pengolahan, dan tampilan agar struktur program lebih mudah dipahami.

---

## Project Information

**Project:** K-Pop Collector Archive  
**Mata Kuliah:** Pemrograman PHP / Mini Project 1  
**Konsep:** 3 Layer Architecture  
**Platform:** Web  
**Bahasa:** PHP  

---

## Kesimpulan

**K-Pop Collector Archive** merupakan project sederhana berbasis PHP yang menerapkan konsep **arsitektur 3 layer**.

Dengan pemisahan antara **Data Layer, Processing Layer, dan Presentation Layer**, program menjadi lebih terstruktur dan mudah dipahami. Project ini juga menerapkan array multidimensional, function, conditional, dan perulangan `foreach` dalam pengolahan data koleksi album K-Pop.

---

<p align="center">
   <b>K-Pop Collector Archive</b> 
</p>

<p align="center">
  Mini Project 1 PHP
</p>
