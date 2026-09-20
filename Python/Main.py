from Film import Film

def is_id_exist(daftar, id_cari):
    return any(f.getId() == id_cari for f in daftar)

def main():
    daftar_film = []
    
    while True:
        print("\n=== MENU BIOSKOP ===")
        print("1. Tambah Data\n2. Tampilkan Data\n3. Update Data\n4. Hapus Data\n5. Cari Data\n6. Keluar")
        pilihan = input("Pilih menu: ")
        
        if pilihan == '1':
            id_film = input("ID: ")
            if is_id_exist(daftar_film, id_film):
                print("[Error] ID sudah digunakan! Silakan gunakan ID lain.")
                continue
            
            judul = input("Judul: ")
            genre = input("Genre: ")
            durasi_str = input("Durasi (menit): ")
            
            try:
                durasi = int(durasi_str)
                if durasi < 0: raise ValueError
                gambar = input("Path Gambar: ")
                daftar_film.append(Film(id_film, judul, genre, durasi, gambar))
                print("Data berhasil ditambahkan!")
            except ValueError:
                print("[Error] Durasi harus berupa angka dan tidak boleh negatif!")
                
        elif pilihan == '2':
            if not daftar_film:
                print("Data film kosong!")
            for f in daftar_film:
                print(f"ID          : {f.getId()}")
                print(f"Judul       : {f.getJudul()}")
                print(f"Genre       : {f.getGenre()}")
                print(f"Durasi      : {f.getDurasi()} mnt")
                print(f"Path Gambar : {f.getGambar()}")
                print("-" * 35)
                
        elif pilihan == '3':
            id_cari = input("Masukkan ID yang diupdate: ")
            found = False
            for i, f in enumerate(daftar_film):
                if f.getId() == id_cari:
                    id_baru = input("ID Baru (Enter untuk skip): ")
                    if id_baru and id_baru != id_cari:
                        if is_id_exist(daftar_film, id_baru):
                            print("[Error] ID sudah digunakan!")
                            found = True
                            break
                        daftar_film[i] = Film(id_baru, f.getJudul(), f.getGenre(), f.getDurasi(), f.getGambar())
                        f = daftar_film[i] # reference update
                    
                    judul = input("Judul Baru (Enter untuk skip): ")
                    if judul: f.setJudul(judul)
                    
                    genre = input("Genre Baru (Enter untuk skip): ")
                    if genre: f.setGenre(genre)
                    
                    durasi_str = input("Durasi Baru (Enter untuk skip): ")
                    if durasi_str:
                        try:
                            durasi = int(durasi_str)
                            if durasi < 0: raise ValueError
                            f.setDurasi(durasi)
                        except ValueError:
                            print("[Error] Durasi tidak valid! Durasi lama tetap digunakan.")
                            
                    gambar = input("Path Gambar Baru (Enter untuk skip): ")
                    if gambar: f.setGambar(gambar)
                    
                    print("Data berhasil diupdate!")
                    found = True
                    break
            if not found:
                print("ID tidak ditemukan!")
                
        elif pilihan == '4':
            id_cari = input("Masukkan ID yang dihapus: ")
            awal = len(daftar_film)
            daftar_film = [f for f in daftar_film if f.getId() != id_cari]
            if len(daftar_film) < awal:
                print("Data berhasil dihapus!")
            else:
                print("ID tidak ditemukan!")
                
        elif pilihan == '5':
            id_cari = input("Masukkan ID yang dicari: ")
            found = False
            for f in daftar_film:
                if f.getId() == id_cari:
                    print("\n--- DATA DITEMUKAN ---")
                    print(f"ID          : {f.getId()}")
                    print(f"Judul       : {f.getJudul()}")
                    print(f"Genre       : {f.getGenre()}")
                    print(f"Durasi      : {f.getDurasi()} mnt")
                    print(f"Path Gambar : {f.getGambar()}")
                    found = True
                    break
            if not found:
                print("ID tidak ditemukan!")
                
        elif pilihan == '6':
            break

if __name__ == "__main__":
    main()