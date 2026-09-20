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

1. Sistem akan menolak jika **durasi diisi dengan teks/huruf atau angka minus**. 
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
<img width="367" height="471" alt="Cuplikan layar 2026-09-20 150747" src="https://github.com/user-attachments/assets/082a331f-caed-4c71-b6ad-6f2cadec2003" />


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
<img width="1828" height="940" alt="Cuplikan layar 2026-09-20 212800" src="https://github.com/user-attachments/assets/047327ec-eabe-4e00-b7a1-2fa05fec6fda" />

- **Peringatan durasi berupa teks/non-numeric:**
<img width="1807" height="916" alt="Cuplikan layar 2026-09-20 212826" src="https://github.com/user-attachments/assets/1a06f6e1-71cf-408d-a0f4-e884c8de4882" />

- **Peringatan duplikasi ID (saat Update):**
<img width="1817" height="883" alt="Cuplikan layar 2026-09-20 213239" src="https://github.com/user-attachments/assets/a59d542f-e2df-4421-82a5-a2a7d372b4eb" />

- **Peringatan duplikasi ID (saat Tambah Data):**
<img width="1817" height="907" alt="Cuplikan layar 2026-09-20 212957" src="https://github.com/user-attachments/assets/b5b254dc-dd72-4214-a34b-e285934489e9" />


#### 1. Menambah Data & Bukti Folder
- **Proses Tambah:**
<img width="1831" height="760" alt="Cuplikan layar 2026-09-20 212903" src="https://github.com/user-attachments/assets/4c0760e4-7331-4653-8749-437ca85360da" />
<img width="1817" height="813" alt="Cuplikan layar 2026-09-20 213102" src="https://github.com/user-attachments/assets/c0349ef1-fbc0-45d2-a1e5-7dc0ff492c84" />

**Output Tabel:**
<img width="1821" height="266" alt="Cuplikan layar 2026-09-20 213122" src="https://github.com/user-attachments/assets/d7206bde-3153-4cd3-b538-c4efe85f0137" />

- **Bukti Letak Folder Gambar (VSCode):**
<img width="248" height="162" alt="Cuplikan layar 2026-09-20 213927" src="https://github.com/user-attachments/assets/ed8e22df-239f-4983-a0a3-bdd7b820c501" />


#### 2. Menampilkan Seluruh Data
<img width="1800" height="227" alt="Cuplikan layar 2026-09-20 214258" src="https://github.com/user-attachments/assets/0d3b47d4-b7a9-44c0-a55e-2dbd8f1cadef" />


#### 3. Memperbarui Data
(Kolom form yang dibiarkan kosong tidak akan menimpa data yang sudah ada).
<img width="1801" height="870" alt="Cuplikan layar 2026-09-20 215304" src="https://github.com/user-attachments/assets/a66b47bd-a956-4ad7-8a77-654612918b22" />

**Output Tabel:**
<img width="1803" height="230" alt="Cuplikan layar 2026-09-20 215324" src="https://github.com/user-attachments/assets/19ea040b-dc48-464a-a61f-0b4dcba92d7b" />


#### 4. Mencari Data Spesifik
Pencarian dilakukan berdasarkan ID.
<img width="1828" height="256" alt="Cuplikan layar 2026-09-20 215424" src="https://github.com/user-attachments/assets/fc27c46a-22d4-439c-9dcf-29755c2221cd" />
**Tampilan hasil pencarian:**
<img width="1783" height="175" alt="Cuplikan layar 2026-09-20 215449" src="https://github.com/user-attachments/assets/5aa4f091-b0a8-4122-8d04-bf802b37e944" />
*(Untuk kembali melihat semua tabel, user dapat menekan tombol "Tampilkan Semua")*

#### 5. Menghapus & Mereset Data
- **Hapus Data Satuan:**
(Menekan tombol hapus pada baris tabel tertentu)
<img width="1796" height="245" alt="Cuplikan layar 2026-09-20 215744" src="https://github.com/user-attachments/assets/d2108fd6-8572-4f12-a64e-3caf6e2dc253" />
(hasilnya)
<img width="1807" height="178" alt="Cuplikan layar 2026-09-20 215806" src="https://github.com/user-attachments/assets/774e3a02-61a3-46bf-8f1e-46796df7c030" />
- **Reset Seluruh Data:** 
(Menekan tombol merah untuk menghapus seluruh *session* data)
<img width="1816" height="235" alt="Cuplikan layar 2026-09-20 215855" src="https://github.com/user-attachments/assets/a1a5ebf9-9fdf-4934-a7dd-63e35d7c3003" />
(hasilnya)
<img width="1807" height="170" alt="Cuplikan layar 2026-09-20 215913" src="https://github.com/user-attachments/assets/d56dbcba-edb0-4c21-95a6-a9cf84a76b6c" />
