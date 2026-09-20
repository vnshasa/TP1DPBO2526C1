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
<img width="542" height="295" alt="Cuplikan layar 2026-09-20 143759" src="https://github.com/user-attachments/assets/ae3a5a18-63c3-4254-818a-7a35361cdd8f" />


2. Sistem akan memblokir proses penambahan atau update data jika **ID yang dimasukkan sudah ada** di dalam data (duplikat).
*(Contoh peringatan di program Python)*:
<img width="483" height="233" alt="Cuplikan layar 2026-09-20 143951" src="https://github.com/user-attachments/assets/ac33ad18-3703-4158-8d7c-2cabdc5dc5d2" />


---

## 📸 DOKUMENTASI HASIL RUNNING
Berikut adalah bukti bahwa program berhasil mengeksekusi operasi CRUD dan pencarian dengan baik.

### 💻 A. Output Program C++
#### 1. Menambah Data
<img width="575" height="627" alt="Cuplikan layar 2026-09-20 145922" src="https://github.com/user-attachments/assets/1c1a6205-800c-4950-987c-62f684d5e8a6" />

#### 2. Menampilkan Seluruh Data
<img width="616" height="772" alt="Cuplikan layar 2026-09-20 145948" src="https://github.com/user-attachments/assets/8a54fe55-53ad-441f-a027-3c7904893118" />

#### 3. Memperbarui Data
(Apabila ada atribut yang tidak ingin diubah, cukup tekan enter agar sistem mempertahankan nilai lamanya. Input baru hanya diisi pada atribut yang ingin diubah).
<img width="797" height="802" alt="Cuplikan layar 2026-09-20 150638" src="https://github.com/user-attachments/assets/2dd9ff32-0afc-494e-8960-35cea383ec1e" />

#### 4. Mencari Data Spesifik
<img width="547" height="366" alt="Cuplikan layar 2026-09-20 150728" src="https://github.com/user-attachments/assets/a2f36cd1-485e-4db7-bacd-7a09186a9821" />

#### 5. Menghapus dan Mencari Data yang Telah Dihapus
<img width="547" height="366" alt="Cuplikan layar 2026-09-20 150728 - Salin" src="https://github.com/user-attachments/assets/9a80ecf2-6e0f-460b-9cc0-048f77d9afdb" />


---

### ☕ B. Output Program Java
#### 1. Menambah Data
<img width="587" height="650" alt="Cuplikan layar 2026-09-20 152619" src="https://github.com/user-attachments/assets/7c092efd-672c-4c48-b8d3-689af81a48a2" />

#### 2. Menampilkan Seluruh Data
<img width="601" height="445" alt="Cuplikan layar 2026-09-20 152635" src="https://github.com/user-attachments/assets/9076fab1-78b3-4260-99f3-e4ebf27b9a72" />

#### 3. Memperbarui Data
(Apabila ada atribut yang tidak ingin diubah, cukup tekan enter agar sistem mempertahankan nilai lamanya).
<img width="810" height="801" alt="Cuplikan layar 2026-09-20 152653" src="https://github.com/user-attachments/assets/af10ea0a-99b4-40cc-ba39-994c42213c7b" />

#### 4. Mencari Data Spesifik
<img width="591" height="371" alt="Cuplikan layar 2026-09-20 152710" src="https://github.com/user-attachments/assets/85da84de-5ba7-422f-92bb-db4474689fd9" />

#### 5. Menghapus Data
<img width="273" height="477" alt="Cuplikan layar 2026-09-20 152724" src="https://github.com/user-attachments/assets/72152286-e4c4-4314-af15-03e0ba42337f" />


---

### 🟢 C. Output Program Python
#### 1. Menambah Data
<img width="610" height="647" alt="Cuplikan layar 2026-09-20 162644" src="https://github.com/user-attachments/assets/32349a36-26f9-4d48-b3ee-328881bded48" />

#### 2. Menampilkan Seluruh Data
<img width="640" height="441" alt="Cuplikan layar 2026-09-20 162652" src="https://github.com/user-attachments/assets/dafc58f3-e3a6-4020-b2a9-3bcb66bfeae6" />

#### 3. Memperbarui Data
(Apabila ada atribut yang tidak ingin diubah, cukup tekan enter agar sistem mempertahankan nilai lamanya).
<img width="633" height="795" alt="Cuplikan layar 2026-09-20 162704" src="https://github.com/user-attachments/assets/be5f2326-8c27-40ea-b885-0ec7341811e9" />

#### 4. Mencari Data Spesifik
<img width="525" height="372" alt="Cuplikan layar 2026-09-20 162713" src="https://github.com/user-attachments/assets/bab82c5c-e4f7-4257-8170-8af226f3d00e" />

#### 5. Menghapus Data
<img width="525" height="372" alt="Cuplikan layar 2026-09-20 162713" src="https://github.com/user-attachments/assets/cb8449a4-5fae-4f02-9436-f84692cfbfe3" />


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
