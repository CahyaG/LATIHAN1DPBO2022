# Desain Pemrograman Berorientasi Objek

>Saya Cahya Gumilang (2003128) mengerjakan tugas LATIHAN1DPBO2022 dalam mata kuliah Desain dan Pemrograman Berbasis Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

Repository ini berisikan Latihan 1 pada mata kuliah Desain Pemrograman Berorientasi Objek tahun 2022. Di dalamnya terdapat beberapa implementasi kelas dan Enkapsulasi dalam bahasa  **C++**, **Java**, **PHP**, dan **Python**.

Modul dapat ditemukan di [Modul 1 - Implementasi Kelas dan Enkapsulasi](https://docs.google.com/document/d/1ov4hTp_LUAoiY0Vi_ZQiX8AYj9Q1MF4B/edit)

### Usage

#### C++
```
g++ -c *.cpp
g++ main.cpp -o [name].exe
```

#### Java
```
javac *.java
java main
```

#### PHP
- Letakkan Folder yang berisi kode PHP di folder htdocs pada folder XAMPP
- Buka XAMPP dan jalankan Apache Web Server
- Buka Browser dan buka alamat berikut<br>
```localhost/[nama-folder]```

#### Python
```
py [name].py
```

### Penjelasan Latihan
#### A
> Contoh sederhana Enkapsulasi kelas Mahasiswa. Terdiri dari getter dan setter serta method tambahan lainnya yang dimana disini ditambahkan method ```showMahasiswa()``` untuk menampilkan isi dari kelas Mahasiswa tersebut
#### B
> Latihan ini berisi tentang Tim Sepakbola. Tim dijadikan kelas yang memiiki atribut ```nama```, ```asalNegara```, ```tahunBerdiri```, dan ```pemain```. kelas ini memiliki getter dan setter untuk setiap atribut serta method ```printTim``` untuk menampilkan informasi dari Tim tersebut. Adapun method tambahan lainnya yaitu method ```addPemain```, mengapa saya menambahkan method ini karena saya menggunakan array untuk atribut ```pemain```. Apa bedanya dengan setter Pemain? method ```addPemain``` ini bertujuan untuk menambha pemain baru kedalam array pemain **tanpa mengubah isi array pemain sebelumnya** (append). Sedangkan setter Pemain saat dijalankan akan **menimpa** isi array pemain lama dan menggantinya dengan yang **baru**.
