## JANJI
Saya Vanisha Septiani Auliaputri dengan NIM 2510735 mengerjakan Tugas Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## 🎯 FITUR PROGRAM

- **Tambah Data:** Menambahkan film baru ke dalam sistem.
- **Tampilkan Data:** Menampilkan daftar seluruh data film yang sudah ditambahkan.
- **Update Data:** Mengubah informasi film berdasarkan identifier unik (ID).
- **Hapus Data:** Menghapus data film berdasarkan identifier unik (ID).
- **Cari Data:** Mencari detail spesifik dari satu film menggunakan ID.

## ⚠️ PENANGANAN ERROR
Program ini dilengkapi dengan validasi input untuk mencegah *error*:

1. Sistem akan menolak dan meminta input ulang jika **durasi diisi dengan teks/huruf atau angka minus**. 
*(Contoh peringatan di program Java)*:


2. Sistem akan memblokir proses penambahan atau update data jika **ID yang dimasukkan sudah ada** di dalam data (duplikat).
*(Contoh peringatan di program Python)*:


---

## 📸 DOKUMENTASI HASIL RUNNING
Berikut adalah bukti bahwa program berhasil mengeksekusi operasi CRUD dan pencarian dengan baik.

### 💻 A. Output Program C++
#### 1. Menambah Data

#### 2. Menampilkan Seluruh Data

#### 3. Memperbarui Data
(Apabila ada atribut yang tidak ingin diubah, cukup tekan enter agar sistem mempertahankan nilai lamanya. Input baru hanya diisi pada atribut yang ingin diubah).

**Output:**

#### 4. Mencari Data Spesifik

#### 5. Menghapus Data

**Output:**

#### 6. Mencari Data yang Telah Dihapus


---

### ☕ B. Output Program Java
#### 1. Menambah Data

#### 2. Menampilkan Seluruh Data

#### 3. Memperbarui Data
(Apabila ada atribut yang tidak ingin diubah, cukup tekan enter agar sistem mempertahankan nilai lamanya).

**Output:**

#### 4. Mencari Data Spesifik

#### 5. Menghapus Data

**Output:**


---

### 🟢 C. Output Program Python
#### 1. Menambah Data

#### 2. Menampilkan Seluruh Data

#### 3. Memperbarui Data
(Apabila ada atribut yang tidak ingin diubah, cukup tekan enter agar sistem mempertahankan nilai lamanya).

**Output:**

#### 4. Mencari Data Spesifik

#### 5. Menghapus Data

**Output:**


---

### 🌐 D. Output Program PHP (Web)

#### Uji Coba Error Handling
- **Peringatan durasi negatif:**

- **Peringatan durasi berupa teks/non-numeric:**

- **Peringatan duplikasi ID (saat Update):**

- **Peringatan duplikasi ID (saat Tambah Data):**


#### 1. Menambah Data & Bukti Folder
- **Proses Tambah:**

**Output Tabel:**

- **Bukti Letak Folder Gambar (VSCode):**


#### 2. Menampilkan Seluruh Data


#### 3. Memperbarui Data
(Kolom form yang dibiarkan kosong tidak akan menimpa data yang sudah ada).

**Output Tabel:**


#### 4. Mencari Data Spesifik
Pencarian dilakukan berdasarkan ID.
**Tampilan hasil pencarian:**

*(Untuk kembali melihat semua tabel, user dapat menekan tombol "Tampilkan Semua")*

#### 5. Menghapus & Mereset Data
- **Hapus Data Satuan:** 
(Menekan tombol hapus pada baris tabel tertentu)

- **Reset Seluruh Data:** 
(Menekan tombol merah untuk menghapus seluruh *session* data)
