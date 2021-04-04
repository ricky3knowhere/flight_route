## Flight Route
Aplikasi Pendaftaran rute penerbangan dengan bandara yang ada di Indonesia, Dapat menghitung secara otomatis harga tiket setelah diakumulasi dengan pajak masing-masing bandara.

## Requirements
- PHP >= 5.3.7

## Usage
1. Pada halaman utama tersedia daftar rute penerbangan.
2. Jika ingin menambah data, klik tombol tambah rute.
3. Kemudian isi form tambah rute.
4. Klik Save, jika data yang dimasukan sudah benar.
5. Data akan tersimpan dan tampil notifikasi.
6. Pada halaman daftar bandara, terdapat daftar bandara dan nominal pajaknya.

## Credits
- Created by [ricky03knohwere](https://ricky03knowhere.github.io)
- Template by [Bootstap 4](https://getbootstrap.com/)


## File Structure

```
flight_route/
├── index.php
├── bandara.php
├── const.php
├── save.php
├── README.md
├── library/
│   ├── css/
│   │    └── bootstrap.min.css
│   └── js/
│         ├── bootstrap.bundle.min.js
│         └── jquery_3.6.0.js
├── data/
│    ├── data.json
│    └── airport.json
└── gambar/
      └── icon.png


```