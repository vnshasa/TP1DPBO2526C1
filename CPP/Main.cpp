#include <iostream>
#include <vector>
#include <string>
#include "Film.cpp"

using namespace std;

bool isIdExist(vector<Film>& daftar, string id) {
    for (size_t i = 0; i < daftar.size(); i++) {
        if (daftar[i].getId() == id) return true;
    }
    return false;
}

void tampilkanData(vector<Film>& daftarFilm) {
    if (daftarFilm.empty()) {
        cout << "Data film kosong!\n";
        return;
    }
    for (size_t i = 0; i < daftarFilm.size(); i++) {
        cout << "ID          : " << daftarFilm[i].getId() << "\n"
            << "Judul       : " << daftarFilm[i].getJudul() << "\n"
            << "Genre       : " << daftarFilm[i].getGenre() << "\n"
            << "Durasi      : " << daftarFilm[i].getDurasi() << " mnt\n"
            << "Path Gambar : " << daftarFilm[i].getGambar() << "\n"
            << "-----------------------------------\n";
    }
}

int main() {
    vector<Film> daftarFilm;
    string pilihanStr;

    do {
        cout << "\n=== MENU BIOSKOP ===\n";
        cout << "1. Tambah Data\n2. Tampilkan Data\n3. Update Data\n4. Hapus Data\n5. Cari Data\n6. Keluar\nPilih menu: ";
        getline(cin, pilihanStr);

        if (pilihanStr == "1") {
            string id, judul, genre, durasiStr, gambar;
            cout << "Masukkan ID: "; getline(cin, id);
            
            if (isIdExist(daftarFilm, id)) {
                cout << "[Error] ID sudah digunakan! Silakan gunakan ID lain.\n";
                continue;
            }

            cout << "Masukkan Judul: "; getline(cin, judul);
            cout << "Masukkan Genre: "; getline(cin, genre);
            cout << "Masukkan Durasi (menit): "; getline(cin, durasiStr);
            
            try {
                int durasi = stoi(durasiStr);
                if (durasi < 0) throw invalid_argument("Negatif");
                cout << "Masukkan Path Gambar: "; getline(cin, gambar);
                
                daftarFilm.push_back(Film(id, judul, genre, durasi, gambar));
                cout << "Data berhasil ditambahkan!\n";
            } catch (...) {
                cout << "[Error] Durasi harus berupa angka dan tidak boleh negatif!\n";
            }

        } else if (pilihanStr == "2") {
            tampilkanData(daftarFilm);

        } else if (pilihanStr == "3") {
            string idCari;
            cout << "Masukkan ID Film yang akan diupdate: ";
            getline(cin, idCari);
            
            bool found = false;
            for (size_t i = 0; i < daftarFilm.size(); i++) {
                if (daftarFilm[i].getId() == idCari) {
                    string idBaru, judul, genre, durasiStr, gambar;
                    
                    cout << "ID Baru (Enter untuk skip): "; getline(cin, idBaru);
                    if (!idBaru.empty() && idBaru != idCari) {
                        if (isIdExist(daftarFilm, idBaru)) {
                            cout << "[Error] ID sudah digunakan!\n";
                            found = true; break;
                        }
                        daftarFilm[i] = Film(idBaru, daftarFilm[i].getJudul(), daftarFilm[i].getGenre(), daftarFilm[i].getDurasi(), daftarFilm[i].getGambar());
                    }

                    cout << "Judul Baru (Enter untuk skip): "; getline(cin, judul);
                    if (!judul.empty()) daftarFilm[i].setJudul(judul);

                    cout << "Genre Baru (Enter untuk skip): "; getline(cin, genre);
                    if (!genre.empty()) daftarFilm[i].setGenre(genre);

                    cout << "Durasi Baru (Enter untuk skip): "; getline(cin, durasiStr);
                    if (!durasiStr.empty()) {
                        try {
                            int durasi = stoi(durasiStr);
                            if (durasi < 0) throw invalid_argument("Negatif");
                            daftarFilm[i].setDurasi(durasi);
                        } catch (...) {
                            cout << "[Error] Durasi tidak valid! Durasi lama tetap digunakan.\n";
                        }
                    }

                    cout << "Path Gambar Baru (Enter untuk skip): "; getline(cin, gambar);
                    if (!gambar.empty()) daftarFilm[i].setGambar(gambar);
                    
                    cout << "Data berhasil diupdate!\n";
                    found = true;
                    break;
                }
            }
            if (!found) cout << "ID tidak ditemukan!\n";

        } else if (pilihanStr == "4") {
            string idCari;
            cout << "Masukkan ID Film yang akan dihapus: ";
            getline(cin, idCari);
            bool found = false;
            for (auto it = daftarFilm.begin(); it != daftarFilm.end(); ++it) {
                if (it->getId() == idCari) {
                    daftarFilm.erase(it);
                    cout << "Data berhasil dihapus!\n";
                    found = true;
                    break;
                }
            }
            if (!found) cout << "ID tidak ditemukan!\n";
        }
        else if (pilihanStr == "5") {
            string idCari;
            cout << "Masukkan ID Film yang dicari: ";
            getline(cin, idCari);
            bool found = false;
            for (size_t i = 0; i < daftarFilm.size(); i++) {
                if (daftarFilm[i].getId() == idCari) {
                    cout << "\n--- DATA DITEMUKAN ---\n"
                        << "ID          : " << daftarFilm[i].getId() << "\n"
                        << "Judul       : " << daftarFilm[i].getJudul() << "\n"
                        << "Genre       : " << daftarFilm[i].getGenre() << "\n"
                        << "Durasi      : " << daftarFilm[i].getDurasi() << " mnt\n"
                        << "Path Gambar : " << daftarFilm[i].getGambar() << "\n";
                    found = true;
                    break;
                }
            }
            if (!found) cout << "ID tidak ditemukan!\n";
        }
    } while (pilihanStr != "6");

    return 0;
}